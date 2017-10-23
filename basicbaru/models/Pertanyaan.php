<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertanyaan".
 *
 * @property integer $id
 * @property string $id_penyakit
 * @property string $isi_pertanyaan
 */
class Pertanyaan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertanyaan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penyakit', 'isi_pertanyaan'], 'required'],
            [['isi_pertanyaan'], 'string'],
            [['id_penyakit'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_penyakit' => 'Id Penyakit',
            'isi_pertanyaan' => 'Isi Pertanyaan',
        ];
    }
}
