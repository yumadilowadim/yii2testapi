<?php
namespace app\components;
use yii\base\Widget;

class CarslistWidget extends Widget {
  public function run() {
    return $this->render('carslist');
  }
}
?>