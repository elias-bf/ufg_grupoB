<?php

namespace app\models;

use Yii;
use yii\base\Model;

class LoginForm extends Model
{
    public $username;

    public $password;

    private $_user = false;

    public function rules()
    {
        return 
        [
            [['username', 'password'], 'required'],
            ['password', 'validatePassword'],
        ];
    }
    
    public function attributeLabels()
    {
        return 
        [
            'username' => 'Usuário',
            'password' => 'Senha'
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors())
        {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) 
            {
                $this->addError($attribute, 'Usuário ou senhas incorretas.');
            }
        }
    }

    public function login()
    {
        if ($this->validate()) 
        {
            return Yii::$app->user->login($this->getUser(), 3600 * 24 * 30);
        }
        
        return false;
    }

    public function getUser()
    {
        if ($this->_user === false) 
        {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
