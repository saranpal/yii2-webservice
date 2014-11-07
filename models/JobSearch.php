<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Job;

/**
 * JobSearch represents the model behind the search form about `app\models\Job`.
 */
class JobSearch extends Job
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['jobtitle', 'company', 'formattedLocationFull', 'snippet'], 'safe'],
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
        $query = Job::find();
		/*If keyword value there then filter apply*/
		if(!empty($params['keyword'])) {
			$query->andFilterWhere(['OR', ['like', 'jobtitle', $params['keyword']], ['like', 'snippet', $params['keyword']]]);
		}		
		/*If location value there then filter apply*/
		if(!empty($params['location'])) {
			$query->andFilterWhere(['like', 'formattedLocationFull', $params['location']]);
		}
		$query->join('LEFT JOIN', 'company', 'job.company=company.name', $params = []);        
		$query->orderBy('company.size DESC');
		
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [
				'pageSize' => 10,
			],
        ]);
		return $dataProvider;
    }
}
