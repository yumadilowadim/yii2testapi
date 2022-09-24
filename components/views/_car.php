<?php
$car_engine = '';
$car_drive = '';

switch ($model->car_engine) {
  case 1: $car_engine = 'Бензин'; break;
  case 2: $car_engine = 'Дизель'; break;
  case 3: $car_engine = 'Гибрид'; break;
  default: $car_engine = '-'; break;
}
switch ($model->car_drive) {
  case 1: $car_drive = 'Полный'; break;
  case 2: $car_drive = 'Передний'; break;
  default: $car_drive = '-'; break;
}
?>
<td><?php echo $model->id; ?></td>
<td><?php echo $model->car_brand; ?></td>
<td><?php echo $model->car_model; ?></td>
<td><?php echo $car_engine; ?></td>
<td><?php echo $car_drive; ?></td>