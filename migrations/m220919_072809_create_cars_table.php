<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cars}}`.
 */
class m220919_072809_create_cars_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cars}}', [
            'id' => $this->primaryKey(),
            'car_model' => $this->string(100)->notNull(),
            'car_brand' => $this->string(100)->notNull(),
            'car_engine' => $this->integer()->notNull(),
            'car_drive' => $this->integer()->notNull(),
        ]);

		$array_car_model = [["Lexus","ES"],["Lexus","GX"],["Toyota","Camry"],["Toyota","Corolla"]];
		$array_car_engine = [1,2,3];
		$array_car_drive = [1,2];
		
		for ($ii = 0; $ii <= 24; $ii++) {
			$get_car_model_index = array_rand($array_car_model, 1);
			$get_car_engine_index = array_rand($array_car_engine, 1);
			$get_car_drive_index = array_rand($array_car_drive, 1);
			
			$this->insert('cars', [
				'car_model' => $array_car_model[$get_car_model_index][1],
				'car_brand' => $array_car_model[$get_car_model_index][0],
				'car_engine' => $array_car_engine[$get_car_engine_index],
				'car_drive' => $array_car_drive[$get_car_drive_index],
			]);
		}
		
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cars}}');
    }
}
