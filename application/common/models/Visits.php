<?php
use Snowplow\RefererParser\Parser;

/**
 * This is the model class for table "visits".
 *
 * The followings are the available columns in table 'visits':
 * @property integer $id
 * @property string $time
 * @property string $referrerUrl
 * @property string $referrerKey
 * @property integer $client_id
 *
 * The followings are the available model relations:
 * @property Messages $client
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
            array('client_id', 'numerical', 'integerOnly'=>true),
			array('referrerUrl, referrerKey', 'length', 'max'=>255),
			array('time', 'safe'),
			array('id, time, referrerUrl, referrerKey', 'safe', 'on'=>'search'),
		);
	}


	public function relations()
	{
		return array(
            'client' => array(self::BELONGS_TO, 'Clients', 'client_id'),
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

    public function parseRefferer($referrer, $url) {
        $parser = new Parser();
        $parseRefferer = $parser->parse($referrer, $url);
        if ($parseRefferer->isKnown()) {
//            $referrer->getMedium(); // "Search"
            $this->referrerUrl = $parseRefferer->getSource(); // "Google"
            $this->referrerKey = $parseRefferer->getSearchTerm();   // "gateway oracle cards denise linn"
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
