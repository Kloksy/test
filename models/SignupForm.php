<?php

namespace app\models;

use  yii\base\Model;


class SignupForm extends Model
{
    public $username;
    public $password;
    public $email;
    public $verifyCode;

    public function rules()
    {
        return [
            [['username', 'password', 'email'], 'required'],
            ['username', 'unique', 'targetClass' => User::className()]
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
        ];
    }

}