<?php

/**
 * Модель пользователи "users".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $role
 * @property integer $createTime
 */
class Users extends EActiveRecord
{

    const ROLE_GUEST = 'guest';
    const ROLE_USER = 'user';
    const ROLE_ADMIN = 'administrator';

	/**
	 * @return string имя таблицы
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array правила валидации
	 */
	public function rules()
	{
		return array(
            array('password', 'authenticate', 'on' => 'login'),
            array('username,email', 'required', 'except' => 'login'),
            array('username', 'match', 'pattern' => '/^[a-z0-9_]+$/i'),
            array('email', 'email'),
            array('username,email', 'unique', 'on' => 'insert'),
			array('createTime', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>64),
			array('email, password', 'length', 'max'=>256),
			array('role', 'length', 'max'=>20),
			array('id, username, email, password, role, createTime', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array зависимости
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array метки
	 */
	public function attributeLabels()
	{
		return array(
			'id' => '#',
			'username' => 'Имя пользователя',
			'email' => 'Почта',
			'password' => 'Пароль',
			'role' => 'Роль',
			'createTime' => 'Дата регистрации',
		);
	}

	/**
	 * @return CActiveDataProvider датапровайдер для поиска
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('createTime',$this->createTime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @param string $className имя класса
	 * @return Users модель
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    /**
     * Фильтр для аунтификации пользователя
     */
    public function authenticate($attribute,$params)
    {
        if(!$this->hasErrors()) {
            $this->_identity = new PxUserIdentity($this->username,$this->password);
            if(!$this->_identity->authenticate())
                $this->addError('password','Не верные данные.');
        }
    }

    /**
     * Логин польщователя
     * @return boolean удачно ли авторизовался
     */
    public function login()
    {
        if($this->_identity === null)
        {
            $this->_identity = new PxUserIdentity($this->username,$this->password);
            $this->_identity->authenticate();
        }
        if($this->_identity->errorCode === PxUserIdentity::ERROR_NONE)
        {
            $duration= 3600*24*1;
            Yii::app()->user->login($this->_identity,$duration);
            return true;
        }
        else
            return false;
    }

    public static function getRoles(){
        return array(
            self::ROLE_USER => 'Пользователь',
            self::ROLE_ADMIN => 'Администратор',
        );
    }

    private $_identity;

    protected function afterConstruct() {
        $this->createTime = time();
    }

}
