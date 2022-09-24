<?php
namespace app\components;
use yii\base\Widget;

class ClientslistWidget extends Widget {
  public function run() {
    return $this->render('clientslist');
  }
}
?>