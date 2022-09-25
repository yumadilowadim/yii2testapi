<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%clients}}`.
 */
class m220924_123901_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%clients}}', [
            'id' => $this->primaryKey(),
            'client_name' => $this->string(100)->notNull(),
            'client_car' => $this->integer()->notNull(),
        ]);
		
		$this->createIndex('client_car','clients','client_car');
		$this->addForeignKey('client_car_fk', 'clients', 'client_car', 'cars', 'id','RESTRICT','RESTRICT');
		
		$this->insert('clients', ['client_name' => 'Ivanov Petr','client_car' => 5]);
		$this->insert('clients', ['client_name' => 'Petrov Ivan','client_car' => 10]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%clients}}');
    }
}
