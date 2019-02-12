<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    
    public $username;

    public $nome;

    public $cargo;
    
    public $cargo_codigo;
    
    public $password;
    
    public $authKey;
    
    public $accessToken;

    private static $users = 
    [
        '1' => 
        [
            'id' => '1',
            'username' => 'admin',
            'nome' => 'Elias Vaz',
            'cargo' => 'Administrador de Seção',
            'cargo_codigo' => '1',
            'password' => 'admin',
            'authKey' => 'test1key',
            'accessToken' => '1-token',
        ],
        '2' => 
        [
            'id' => '2',
            'username' => 'chefe',
            'nome' => 'Jhordan Gabriel',
            'cargo' => 'Chefe de Departamento',
            'cargo_codigo' => '2',
            'password' => 'chefe',
            'authKey' => 'test2key',
            'accessToken' => '2-token',
        ],
        '3' => 
        [
            'id' => '3',
            'username' => 'funcionario',
            'nome' => 'Paulo Freitas',
            'cargo' => 'Funcionário',
            'cargo_codigo' => '3',
            'password' => 'funcionario',
            'authKey' => 'test3key',
            'accessToken' => '3-token',
        ]
    ];

    public static function findIdentity($id)
    {
        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) 
        {
            if ($user['accessToken'] === $token) 
            {
                return new static($user);
            }
        }

        return null;
    }

    public static function findByUsername($username)
    {
        foreach (self::$users as $user)
        {
            if (strcasecmp($user['username'], $username) === 0)
            {
                return new static($user);
            }
        }

        return null;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
