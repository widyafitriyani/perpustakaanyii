<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosa_detail".
 *
 * @property integer $id
 * @property string $id_pasien
 * @property string $id_penyakit
 * @property string $id_diagnosa
 */
class DiagnosaDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosa_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_penyakit', 'id_diagnosa'], 'required'],
            [['id_pasien', 'id_penyakit', 'id_diagnosa'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'id_penyakit' => 'Id Penyakit',
            'id_diagnosa' => 'Id Diagnosa',
        ];
    }
}
