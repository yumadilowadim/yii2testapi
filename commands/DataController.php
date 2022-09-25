<?php
namespace app\commands;
use yii\console\Controller;

use app\models\Cars;
use app\models\Clients;

class DataController extends Controller
{
  public function actionIndex()
  {
    echo 'Clients or Cars';
  }
  public function actionClients()
  {
    $clients = Clients::find()->all();
    foreach ($clients as $client) {
      $client_car = $client->getClientCar()->one();
      echo $client->id.') '.$client->client_name.', Авто: '.$client_car->car_brand.' '.$client_car->car_model.' ('.$client_car->id.')'.PHP_EOL;
    }
  }
  public function actionCars()
  {
    $cars = Cars::find()->all();
    foreach ($cars as $car) {
      $car_engine = '';
      $car_drive = '';

      switch ($car->car_engine) {
        case 1: $car_engine = 'Бензин'; break; case 2: $car_engine = 'Дизель'; break; case 3: $car_engine = 'Гибрид'; break; default: $car_engine = '-'; break;
      }
      switch ($car->car_drive) {
        case 1: $car_drive = 'Полный'; break; case 2: $car_drive = 'Передний'; break; default: $car_drive = '-'; break;
      }
      echo $car->id.') '.$car->car_brand.' '.$car->car_model.', Привод: '.$car_drive.', Двигатель: '.$car_engine.PHP_EOL;
    }
  }
}