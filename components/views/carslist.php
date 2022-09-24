<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\models\Cars;
?>

<table class="table table-striped table-sm">
  <thead>
  <tr>
    <th>#</th>
    <th>Бренд</th>
    <th>Модель</th>
    <th>Двигатель</th>
    <th>Привод</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $query = Cars::find()->orderBy('id ASC');
  $dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
      'pageSize' => 30,
    ],
  ]);
  echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_car',
    'summary' => '',
    'emptyText' => 'Автомобилей не найдено',
    'emptyTextOptions' => [
      'tag' => 'p',
      'class' => 'text-center'
    ],
    'itemOptions' => [
      'tag' => 'tr',
      'class' => ''
    ],
  ]);
  ?>
  </tbody>
</table>
