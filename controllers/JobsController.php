<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Job;
use app\models\JobSearch;

/**
 * JobsController implements the CRUD actions for Job model.
 */
class JobsController extends ActiveController
{
    
	public $modelClass = 'app\models\Job';
	public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
	
	public function actionList() {
		
		$searchModel = new JobSearch();
		$dataProvider = $searchModel->search(array_merge(Yii::$app->request->queryParams,Yii::$app->request->post()));
        return $dataProvider;
	}

}
