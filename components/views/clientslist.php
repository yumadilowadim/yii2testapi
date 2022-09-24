<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
use app\models\Clients;
?>

<table class="table table-striped table-sm">
  <thead>
  <tr>
    <th>#</th>
    <th>ФИО</th>
    <th>Автомобиль</th>
  </tr>
  </thead>
  <tbody>
  <?php
  $query = Clients::find()->orderBy('id ASC');
  $dataProvider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
      'pageSize' => 30,
    ],
  ]);
  echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_client',
    'summary' => '',
    'emptyText' => 'Клиентов не найдено',
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
