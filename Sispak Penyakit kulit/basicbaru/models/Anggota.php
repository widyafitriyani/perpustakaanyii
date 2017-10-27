<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\Helpers\ArrayHelper;
use app\models\User;
/**
 * This is the model class for table "anggota".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $photo
 * @property integer $id_jenis_kelamin
 * @property string $email
 * @property string $tanggal_lahir
 *
 * @property JenisKelamin $idJenisKelamin
 */
class Anggota extends \yii\db\ActiveRecord
{

    public $username;
    public $password;
    public $password_konfirmasi;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'photo', 'id_jenis_kelamin', 'email', 'tanggal_lahir', 'username', 'password', 'password_konfirmasi'], 'required'],
            [['alamat'], 'string'],
            [['id_jenis_kelamin'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nama', 'photo', 'email'], 'string', 'max' => 255],
            [['id_jenis_kelamin'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKelamin::className(), 'targetAttribute' => ['id_jenis_kelamin' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'photo' => 'Photo',
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'email' => 'Email',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenisKelamin()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(),['nama_anggota' => 'id']);
    }

    public function createUser()
    {
        $user = new User;
        $user->username = $this->username;
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->nama = $this->id;
        $user->id_role = 2;

        if ($user->save(false))
            return true;
        else
                throw new \Exception("Error Processing Request".var_dump($user->errors), 400);
            return true;
    }

        public function validatePassword($attribute, $params)
    {
        if($this->password != $this->password_konfirmasi)
        {
            $this->addError($attribute, 'Password konfirmasi tidak sesuai');
        }
    }

    public function getRelationField($relation,$field)
    {
        if(!empty($this->$relation->$field)){
            return $this->$relation->$field;   
        }
        else{
            return null;
        }
    }

    public function getGambar($htmlOptions=[])
    {
        //jika file ada dalam direktori
        if($this->photo == null && !file_exists('@web/uploads/'.$this->photo)){
            return Html::img('@web/images/pakar.jpg', $htmlOptions);
        } else {
            return Html::img('@web/uploads/'.$this->photo, $htmlOptions);
        }
    }
}
