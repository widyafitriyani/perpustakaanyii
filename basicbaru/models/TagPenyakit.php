<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag_penyakit".
 *
 * @property integer $id
 * @property string $nama
 * @property string $slogan
 */
class TagPenyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'slogan'], 'required'],
            [['nama', 'slogan'], 'string', 'max' => 255],
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
            'slogan' => 'Slogan',
        ];
    }
}
