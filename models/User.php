<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;


use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $email
 * @property string|null $email_confirm_token
 * @property int|null $status
 */
class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    const STATUS_BLOCKED = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_WAIT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'email_confirm_token'], 'string'],
            [['status'], 'default', 'value' => null],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'email_confirm_token' => 'Email Confirm Token',
            'status' => 'Status',
        ];
    }


    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id]);
    }
 
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }
    public function getId()
    {
        return $this->id;
    }
    public function getAuthKey()
    {
        //return $this->authKey;
    }
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function getStatusName()
    {
        return ArrayHelper::getValue(self::getStatusesArray(), $this->status);
    }
 
    public static function getStatusesArray()
    {
        return [
            self::STATUS_BLOCKED => '????????????????????????',
            self::STATUS_ACTIVE => '??????????????',
            self::STATUS_WAIT => '?????????????? ??????????????????????????',
        ];
    }

    /**
     * @param string $email_confirm_token
     * @return static|null
     */
    public static function findByEmailConfirmToken($email_confirm_token)
    {
        return static::findOne(['email_confirm_token' => $email_confirm_token, 'status' => '0']);
    }
 
    /**
     * Generates email confirmation token
     */
    public function generateEmailConfirmToken()
    {
        $this->email_confirm_token = Yii::$app->security->generateRandomString();
    }
 
    /**
     * Removes email confirmation token
     */
    public function removeEmailConfirmToken()
    {
        $this->email_confirm_token = null;
    }

    

}
