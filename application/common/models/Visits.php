<?php
use Snowplow\RefererParser\Parser;

/**
 * This is the model class for table "visits".
 *
 * The followings are the available columns in table 'visits':
 * @property integer $id
 * @property string $ip
 * @property string $time
 * @property string $referrerUrl
 * @property string $referrerKey
 *
 * The followings are the available model relations:
 * @property Messages[] $messages
 */
class Visits extends EActiveRecord
{
	public $visits;
	public $firstVisit;
	public $lastVisit;

    public function tableName()
	{
		return 'visits';
	}

	public function rules()
	{

		return array(
			array('ip, referrerUrl, referrerKey', 'length', 'max'=>255),
			array('time', 'safe'),
			array('id, ip, time, referrerUrl, referrerKey', 'safe', 'on'=>'search'),
		);
	}


	public function relations()
	{
		return array(
			'messages' => array(self::HAS_MANY, 'Messages', 'visit_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'id',
			'ip' => 'IP',
			'time' => 'Время посещения',
			'firstVisit' => 'Первое посещение',
			'referrerUrl' => 'Url реферера',
			'referrerKey' => 'Информация реферера',
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('referrerUrl',$this->referrerUrl,true);
		$criteria->compare('referrerKey',$this->referrerKey,true);

        $criteria->group = 'ip';
        $criteria->select = array(
            'id', 'ip', 'referrerUrl', 'referrerKey', new CDbExpression('MAX(time) as time')
        );

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public static function register() {
        $model = new self();
        $model->ip = Yii::app()->request->userHostAddress;
        $model->time = new CDbExpression('NOW()');
        $model->parseRefferer(Yii::app()->request->urlReferrer, Yii::app()->request->hostInfo);
        $model->save();
        return $model;
    }

    public static function last($ip = false) {
        $model = Visits::model()->find(array(
            'order' => 'time DESC',
            'condition' => 'ip = :ip',
            'params' => array(
                ':ip' => $ip ?: Yii::app()->request->userHostAddress,
            ),
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
