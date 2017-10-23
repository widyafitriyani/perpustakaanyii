<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DiagnosaDetail;

/**
 * DiagnosaDetailSearch represents the model behind the search form of `app\models\DiagnosaDetail`.
 */
class DiagnosaDetailSearch extends DiagnosaDetail
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_diagnosa'], 'integer'],
            [['kesimpulan', 'saran', 'gambar'], 'safe'],
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
        $query = DiagnosaDetail::find();

        $this->load($params);

        // add conditions that should always apply here

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_diagnosa' => $this->id_diagnosa,
        ]);

        $query->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'saran', $this->saran])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

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
