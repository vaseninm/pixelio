<?php
use Snowplow\RefererParser\Parser;

/**
 * This is the model class for table "clients".
 *
 * The followings are the available columns in table 'clients':
 * @property integer $id
 * @property string $ip
 * @property integer $visits
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $comfortTime
 * @property string $referrerUrl
 * @property string $referrerKey
 * @property integer $firstVisit
 * @property integer $lastVisit
 */
class Clients extends EActiveRecord
{

	public function tableName()
	{
		return 'clients';
	}

	public function rules()
	{
		return array(
			array('visits, firstVisit, lastVisit', 'numerical', 'integerOnly'=>true),
			array('ip, email, phone, comfortTime, name, referrerUrl, referrerKey', 'length', 'max'=>255),
            array('ip', 'unique'),
			array('message', 'safe'),
			array('ip, visits, name, email, phone', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'ip' => 'IP',
			'visits' => 'Посещения',
			'name' => 'Имя',
			'email' => 'Почта',
			'phone' => 'Телефон',
			'message' => 'Сообщени',
			'firstVisit' => 'Первое посещение',
			'lastVisit' => 'Последнее посещение',
			'comfortTime' => 'Удобное время',
			'referrerUrl' => 'Страница рефера',
			'referrerKey' => 'Запрос или URL',
		);
	}

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->firstVisit = time();
            $this->ip = Yii::app()->request->userHostAddress;
        }
        $this->visits++;
        $this->lastVisit = time();
        return parent::beforeSave();
    }

	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

        $criteria->order = 'lastVisit DESC';

		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('visits',$this->visits);
		$criteria->compare('name',$this->name);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('referrerUrl',$this->phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function parseRefferer($referrer, $url) {
        $parser = new Parser();
        $parseRefferer = $parser->parse($referrer, $url);
        if ($parseRefferer->isKnown()) {
//            $referrer->getMedium(); // "Search"
            $this->referrerUrl = $parseRefferer->getSource(); // "Google"
            $this->referrerKey = $parseRefferer->getTerm();   // "gateway oracle cards denise linn"
        } else {
            $this->referrerUrl = $referrer;
            $this->referrerKey = NULL;
        }
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
