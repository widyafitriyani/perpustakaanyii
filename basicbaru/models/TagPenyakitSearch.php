<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TagPenyakit;

/**
 * TagPenyakitSearch represents the model behind the search form of `app\models\TagPenyakit`.
 */
class TagPenyakitSearch extends TagPenyakit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nama', 'slogan'], 'safe'],
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
        $query = TagPenyakit::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'slogan', $this->slogan]);

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
