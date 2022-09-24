<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $id
 * @property string $client_name
 * @property int $client_car
 *
 * @property Cars $clientCar
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_name', 'client_car'], 'required'],
            [['client_car'], 'integer'],
            [['client_name'], 'string', 'max' => 100],
            [['client_car'], 'exist', 'skipOnError' => true, 'targetClass' => Cars::class, 'targetAttribute' => ['client_car' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_name' => 'Client Name',
            'client_car' => 'Client Car',
        ];
    }

    /**
     * Gets query for [[ClientCar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientCar()
    {
        return $this->hasOne(Cars::class, ['id' => 'client_car']);
    }
}
