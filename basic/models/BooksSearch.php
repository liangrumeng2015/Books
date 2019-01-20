<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\books;

/**
 * BooksSearch represents the model behind the search form of `app\models\books`.
 */
class BooksSearch extends books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'booksNum'], 'integer'],
            [['booksName', 'booksAuthor'], 'safe'],
            [['booksPrice'], 'number'],
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
    public function search($params)
    {
        $query = books::find();

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
            'id' => $this->id,
            'booksPrice' => $this->booksPrice,
            'booksNum' => $this->booksNum,
        ]);

        $query->andFilterWhere(['like', 'booksName', $this->booksName])
            ->andFilterWhere(['like', 'booksAuthor', $this->booksAuthor]);

        return $dataProvider;
    }
}
