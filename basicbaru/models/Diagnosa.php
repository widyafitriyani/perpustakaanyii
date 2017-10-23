<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosa".
 *
 * @property integer $id
 * @property integer $id_penyakit
 * @property integer $id_pertanyaan
 * @property integer $id_pasien
 */
class Diagnosa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_penyakit', 'id_pertanyaan', 'id_pasien'], 'required'],
            [['id_penyakit', 'id_pertanyaan', 'id_pasien'], 'integer'],
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
            'id_pertanyaan' => 'Id Pertanyaan',
            'id_pasien' => 'Id Pasien',
        ];
    }
}
