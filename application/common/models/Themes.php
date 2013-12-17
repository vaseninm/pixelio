<?php

/**
 * This is the model class for table "themes".
 *
 * The followings are the available columns in table 'themes':
 * @property integer $id
 * @property string $name
 * @property integer $strong
 *
 * The followings are the available model relations:
 * @property Clients[] $clients
 */
class Themes extends EActiveRecord
{

    public function tableName()
	{
		return 'themes';
	}

	public function rules()
	{
		return array(
			array('strong', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),

			array('id, name, strong', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'clients' => array(self::HAS_MANY, 'Clients', 'theme_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя темы',
			'strong' => 'Вес',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('strong',$this->strong);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getTheme() {
        $themes = self::model()->findAll();
        $sumStrong = 0;
        foreach ($themes as $theme) {
            $sumStrong += $theme->strong;
        }
        $rand = rand(1, $sumStrong);
        $sumStrong = 0;
        foreach ($themes as $theme) {
            $sumStrong += $theme->strong;
            if ($rand <= $sumStrong) return $theme;
        }
        return null;
    }

    public static function setTheme($name) {
        Yii::app()->setTheme($name);
    }
}
