<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\Helpers\ArrayHelper;
use kartik\mpdf\Pdf;

/**
 * This is the model class for table "buku".
 *
 * @property integer $id
 * @property string $nama
 * @property string $id_jenis
 * @property string $cover
 * @property string $penulis
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['penulis'], 'required'],
            [['file'],'file'],
            [['id_jenis'], 'string', 'max' => 33],
            [['cover', 'penulis'], 'required'],
            [['nama', 'cover'], 'string', 'max' => 255],
            [['penulis'], 'string', 'max' => 40],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['id_jenis' => 'id']],
            [['penulis'], 'exist', 'skipOnError' => true, 'targetClass' => Penulis::className(), 'targetAttribute' => ['penulis' => 'id']],
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
            'penulis' => 'Penulis',
            'id_jenis' => 'Jenis',
            'file' => 'Cover',
        ];
    }

/**
     * @return \yii\db\ActiveQuery
     */
 public function getIdJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_jenis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPenulis()
    {
        return $this->hasOne(Penulis::className(), ['id' => 'penulis']);
    }
 /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjaman()
    {
        return $this->hasMany(Peminjaman::className(), ['id_buku' => 'id']);
    }
    //cara pertama pake fungsi getrelationfield
    public function getRelationfield($relation,$field)
    {
        if(!empty($this->$relation->$field)){
            return $this->$relation->$field;
        }
        else{
            return null;
        }
    }
    public static function getList()
    {
        return ArrayHelper::map(Buku::find()->all(), 'id','nama');
    }

    public static function getCount()
    {
        return self::find()->count();
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->cover->saveAs('upload/' .$this->cover->baseName. '.' .$this->cover->extension);
            return true;
        } else {
            return false;
        
        }

    }
}