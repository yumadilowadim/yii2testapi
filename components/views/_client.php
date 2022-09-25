<?php
    $client_car = $model->getClientCar()->one();
?>
<td><?php echo $model->id; ?></td>
<td><?php echo $model->client_name; ?></td>
<td><?php echo $client_car->car_brand.' '.$client_car->car_model; ?></td>