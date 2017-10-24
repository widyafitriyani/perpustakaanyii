<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penyakit;

/**
 * PenyakitSearch represents the model behind the search form of `app\models\Penyakit`.
 */
class PenyakitSearch extends Penyakit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tag_penyakit'], 'integer'],
            [['nama', 'isi', 'solusi', 'gambar', 'id_penyakit'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */

    public function getQuerySearch($params)
    {
        $query = Penyakit::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_tag_penyakit' => $this->id_tag_penyakit,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'isi', $this->isi])
            ->andFilterWhere(['like', 'solusi', $this->solusi])
            ->andFilterWhere(['like', 'gambar', $this->gambar])
            ->andFilterWhere(['like', 'id_penyakit', $this->id_penyakit]);

        return $query;
    }
    
    public function search($params)
    {
        $query = $this->getQuerySearch($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);        

        return $dataProvider;
    }


}
