<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "jenis_kelamin".
 *
 * @property integer $id
 * @property string $nama
 *
 * @property Anggota[] $anggotas
 * @property Pasien[] $pasiens
 */
class JenisKelamin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_kelamin';
    }

    public static function getList()
    {
        return ArrayHelper::map(JenisKelamin::find()->all(),'id','nama');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['nama'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAnggotas()
    {
        return $this->hasMany(Anggota::className(), ['id_jenis_kelamin' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPasiens()
    {
        return $this->hasMany(Pasien::className(), ['id_jenis_kelamin' => 'id']);
    }
}
