<?php
$this->title = 'Front';

use app\components\CarslistWidget;
use app\components\ClientslistWidget;
?>

<div class="container">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1><?php echo $this->title; ?></h1>

      <h3>Автомобили</h3>
      <?= CarslistWidget::widget() ?>

        <br/><br/><h3>Клиенты</h3>
      <?= ClientslistWidget::widget() ?>
	</div>
</div>



<?php
$script0 = <<< JS
	
JS;
$this->registerJs($script0, yii\web\View::POS_READY);
?>