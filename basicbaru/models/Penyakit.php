<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "penyakit".
 *
 * @property integer $id
 * @property integer $id_tag_penyakit
 * @property string $nama
 * @property string $isi
 * @property string $solusi
 * @property string $gambar
 * @property string $id_penyakit
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tag_penyakit', 'nama', 'isi', 'solusi', 'gambar', 'id_penyakit'], 'safe'],
            [['id_tag_penyakit'], 'integer'],
            [['isi', 'solusi'], 'string'],
            [['nama'], 'string', 'max' => 255],
            [['gambar', 'id_penyakit'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tag_penyakit' => 'Id Tag Penyakit',
            'nama' => 'Nama',
            'id_penyakit' => 'Id Penyakit',
            'isi' => 'Isi',
            'solusi' => 'Solusi',
            'gambar' => 'Gambar',
            
        ];
    }

   public function getPhoto($htmlOptions=[])
    {
        //jika file ada dalam direktori
        if($this->gambar == null && !file_exists('@web/uploads/'.$this->gambar)){
            return Html::img('@web/images/pakar.jpg', $htmlOptions);
        } else {
            return Html::img('@web/uploads/'.$this->gambar, $htmlOptions);
        }
    }

}

