<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;
/**
 * This is the model class for table "penulis".
 *
 * @property integer $id
 * @property string $nama
 * @property string $id_jenis_kelamin
 * @property string $alamat
 * @property integer $jumlah
 * @property string $lat
 * @property string $lng
 *
 * @property Buku[] $bukus
 */
class Penulis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penulis';
    }

    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'id_jenis_kelamin', 'jumlah', 'lat', 'lng'], 'required'],
            [['jumlah'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['id_jenis_kelamin'], 'string', 'max' => 11],
            [['alamat'], 'string', 'max' => 90],
            [['lat', 'lng'], 'string', 'max' => 50],
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
            'id_jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'jumlah' => 'Jumlah',
            'lat' => 'Lat',
            'lng' => 'Lng',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBukus()
    {
        return $this->hasMany(Buku::className(), ['penulis' => 'id']);
    }


    /** 
    * @return \yii\db\ActiveQuery
    */
public function getIdJenisKelamin()
    {
        return $this->hasOne(JenisKelamin::className(), ['id' => 'id_jenis_kelamin']);
    }
public static function getList()
    {
        return ArrayHelper::map(Penulis::find()->all(),'id','nama');
    }
}
