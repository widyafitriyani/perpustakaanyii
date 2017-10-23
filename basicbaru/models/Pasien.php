<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $photo
 * @property integer $status
 * @property integer $id_jenis_kelamin
 * @property string $email
 * @property string $tanggal_lahir
 *
 * @property JenisKelamin $idJenisKelamin
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'photo', 'status', 'id_jenis_kelamin', 'email', 'tanggal_lahir'], 'required'],
            [['alamat'], 'string'],
            [['status', 'id_jenis_kelamin'], 'integer'],
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
            'status' => 'Status',
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
}
