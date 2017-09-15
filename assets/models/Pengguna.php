<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property integer $role
 */
class Pengguna extends \yii\db\ActiveRecord
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
            'authKey' => 'Auth Key',
            'accessToken' => 'Auth Key',
            'role' => 'Role',
        ];
    }
/**
* @return \yii\db\ActiveQuery
*/
public function getPeminjamen()
{
    return $this->hasMany(Peminjaman::className(), ['id_user'=> 'id']);
}
public static function getList()
{
    return ArrayHelper::map(Pengguna::find()->all(),'id','nama');
}
}
