<?php

namespace app\models;

use Yii;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "jenis".
 *
 * @property integer $id
 * @property string $jenis_buku
 *
 * @property Buku[] $bukus
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenis_buku'], 'required'],
            [['jenis_buku'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_buku' => 'Jenis Buku',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBukus()
    {
        return $this->hasMany(Buku::className(), ['id_jenis' => 'id']);
    }
    public static function getList()
    {
        return ArrayHelper::map(Jenis::find()->all(),'id','jenis_buku');
    }
}
