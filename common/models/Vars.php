<?php

/**
 * This is the model class for table "vars".
 *
 * The followings are the available columns in table 'vars':
 * @property integer $id
 * @property string $name
 * @property string $value
 * @property integer $type
 * @property integer $domain_id
 */
class Vars extends EActiveRecord
{
    public $file;

	public function tableName()
	{
		return 'vars';
	}

	public function rules()
	{
		return array(
			array('type', 'numerical', 'integerOnly'=>true),
			array('name, domain_id', 'length', 'max'=>255),
            array('name', 'match', 'pattern' => '/^[a-z]*$/i'),
			array('value', 'safe'),
            array('file', 'file', 'types' => 'jpg,jpeg,png,gif', 'allowEmpty' => true),
            array('name', 'unique'),
            array('name,type,value, domain_id', 'required'),
            array('type', 'default', 'value' => self::TYPE_TEXT),
            array('type', 'in', 'range' => [self::TYPE_TEXT, self::TYPE_HTML, self::TYPE_IMAGE]),
			array('id, name, value, type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
            'domain' => array(self::BELONGS_TO, 'Domains', 'domain_id'),
        );
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'value' => 'Значение',
			'file' => 'Значение',
			'type' => 'Тип',
			'domain_id' => 'Домен',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('domain_id',$this->domain_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function domain($domain_id)
    {
        $criteria = new CDbCriteria();
        $criteria->compare('domain_id', $domain_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }
	
	public function user($user_id) {
		$criteria = new CDbCriteria();
		$criteria->with = array('domain');
        $criteria->compare('domain.user_id', $user_id);
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
	}

    public static $vars = NULL;
    public static $types = [
        self::TYPE_TEXT => 'Текст',
        self::TYPE_HTML => 'HTML',
        self::TYPE_IMAGE => 'Изображение',
    ];
    const TYPE_TEXT = 1;
    const TYPE_HTML = 2;
    const TYPE_IMAGE = 3;

    public static function get($name){
        if (self::$vars === NULL) {
            $models = self::model()->findAll();
            self::$vars = array();
            foreach ($models as $model) {
                self::$vars[$model->name] = array(
                    'value' => $model->value,
                    'type' => $model->type,
                );
            }
        }
        return isset(self::$vars[$name]['value']) ? self::$vars[$name]['value'] : '';
    }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


}
