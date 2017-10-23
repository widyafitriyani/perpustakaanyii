<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diagnosa_detail".
 *
 * @property integer $id
 * @property integer $id_diagnosa
 * @property string $kesimpulan
 * @property string $saran
 * @property string $gambar
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
            [['id_diagnosa', 'kesimpulan', 'saran', 'gambar'], 'required'],
            [['id_diagnosa'], 'integer'],
            [['kesimpulan', 'saran'], 'string'],
            [['gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_diagnosa' => 'Id Diagnosa',
            'kesimpulan' => 'Kesimpulan',
            'saran' => 'Saran',
            'gambar' => 'Gambar',
        ];
    }
}
