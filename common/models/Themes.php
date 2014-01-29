<?php

/**
 * This is the model class for table "themes".
 *
 * The followings are the available columns in table 'themes':
 * @property integer $id
 * @property string $name
 * @property integer $strong
 * @property integer $domain_id
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
			array('strong,domain_id', 'numerical', 'integerOnly'=>true),
            array('name, strong, domain_id','required'),
            array('name', 'length', 'max'=>255),

			array('id, name, strong', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'clients' => array(self::HAS_MANY, 'Clients', 'theme_id'),
            'domain' => array(self::BELONGS_TO, 'Domains', 'domain_id'),
        );
	}

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя темы',
			'strong' => 'Вес',
            'domain_id' => 'Домен',
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('strong',$this->strong);
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


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public static function getTheme() {
        $themes = self::model()->domain(Domains::current()->id)->findAll();
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

    public static function getAll($domain = null) {
        $criteria = new CDbCriteria();
        if ($domain) {
            $criteria->compare('domain_id', $domain);
        }
        $models = Themes::model()->user(Yii::app()->user->id)->findAll($criteria);
        return CHtml::listData($models, 'id', 'name');
    }

    public static function getThemeCatalogs(){
        $dirname = Yii::getPathOfAlias('frontend.www.themes');
        $themes = array();
        foreach (scandir($dirname) as $file) {
            if (is_dir($dirname . '/' . $file) && !in_array($file, array('.', '..'))) {
                $themes[] = $file;
            }
        }
        return $themes;
    }
}
