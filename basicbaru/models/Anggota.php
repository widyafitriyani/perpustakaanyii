<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\Helpers\ArrayHelper;

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
            [['nama', 'alamat', 'photo', 'id_jenis_kelamin', 'email', 'tanggal_lahir'], 'required'],
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
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'photo' => 'Photo',
            'id_jenis_kelamin' => 'Id Jenis Kelamin',
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
