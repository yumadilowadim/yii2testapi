<?php
namespace app\modules\front\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\web\HttpException;

//use app\models\User;

class DefaultController extends Controller
{
	
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
						'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity;
						},
                        'roles' => ['@'],
                    ],
                ],
            ],	
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }


    public function actionIndex() {
		return $this->render('index');
    }
	
	
}
