<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property integer $role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password', 'role'], 'required'],
            [['role'], 'integer'],
            [['nama', 'username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
            'authkey' => 'Authkey',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjamen()
    {
        return $this->hasMany(Peminjaman::className(), ['id_user' => 'id']);
    }

     public static function findIdentity($id)
    {
        $user = User::findOne($id);
        if(count($user)){
        return new static($user);
    }
    return null;
}

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
   {
        //mencari user login berdasarkan accessToken dan hanya dicari 1.
        $user = User::find()->where(['accessToken'=>$token])->one(); 
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        //mencari user login berdasarkan username dan hanya dicari 1.
        $user = User::find()->where(['username'=>$username])->one(); 
        if(count($user)){
            return new static($user);
        }
        return null;
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

     public static function getList()
    {
        return ArrayHelper::map(self::find()->all(), 'id', 'nama');
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }
}
