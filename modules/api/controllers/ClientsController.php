<?php
namespace app\modules\api\controllers;

use Yii;
use yii\web\Controller;
use yii\rest\ActiveController;
use yii\filters\auth\QueryParamAuth;


class ClientsController extends ActiveController
{
  public $modelClass = 'app\models\Clients';
  //public $defaultAction = 'list';

  public function behaviors()
  {
    $behaviors = parent::behaviors();
    $behaviors['corsFilter'] = [
      'class' => \yii\filters\Cors::className(),
      'cors' => [
        'Origin' => ['*'],
        'Access-Control-Request-Method' => ['GET', 'POST', 'HEAD', 'OPTIONS'],
        'Access-Control-Request-Headers' => ['*'],
        'Access-Control-Allow-Credentials' => null,
        'Access-Control-Max-Age' => 86400,
        'Access-Control-Expose-Headers' => [],
      ],
    ];
    $behaviors['authenticator'] = [
      'class' => QueryParamAuth::className(),
      //'except' => [''],
    ];
    $behaviors['contentNegotiator'] = [
      'class' => \yii\filters\ContentNegotiator::className(),
      'formats' => [
        'application/json' => \yii\web\Response::FORMAT_JSON,
      ]
    ];

    return $behaviors;
  }

  public function actions()
  {
    $actions = parent::actions();

    $actions['index']['dataFilter'] = [
      'class' => \yii\data\ActiveDataFilter::class,
      'searchModel' => $this->modelClass,
    ];

    return $actions;
  }

}