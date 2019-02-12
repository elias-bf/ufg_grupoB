<?php

namespace app\controllers;

use Yii;
use app\models\searches\UnidadeAdministrativaSearch;
use yii\web\Controller;
use yii\filters\AccessControl;

class UnidadeAdministrativaController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => 
            [
                'class' => AccessControl::className(),
                'rules' => 
                [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new UnidadeAdministrativaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
