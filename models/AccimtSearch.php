<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Accimt;

/**
 * AccimtSearch represents the model behind the search form of `app\models\Accimt`.
 */
class AccimtSearch extends Accimt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_no', 'nic', 'contact'], 'integer'],
            [['first_name', 'last_name', 'address', 'dob', 'email', 'institute', 'division', 'level', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
    public function search($params)
    {
        $query = Accimt::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'reg_no' => $this->reg_no,
            'nic' => $this->nic,
            'contact' => $this->contact,
            'dob' => $this->dob,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'institute', $this->institute])
            ->andFilterWhere(['like', 'division', $this->division])
            ->andFilterWhere(['like', 'level', $this->level])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
