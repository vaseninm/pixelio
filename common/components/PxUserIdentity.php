<?php

class PxUserIdentity extends CUserIdentity
{
    private $_id;

    public function authenticate()
    {
        $attribute = strpos('@', $this->username) === false ? 'username' : 'email';
        $record = Users::model()->findByAttributes(array($attribute => $this->username));
        if ($record === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } elseif (!CPasswordHelper::verifyPassword($this->password, $record->password)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            $this->_id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}