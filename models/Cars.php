<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property int $id
 * @property string $car_model
 * @property string $car_brand
 * @property int $car_engine
 * @property int $car_drive
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'car_model', 'car_brand', 'car_engine', 'car_drive'], 'required'],
            [['id', 'car_engine', 'car_drive'], 'integer'],
            [['car_model', 'car_brand'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_model' => 'Car Model',
            'car_brand' => 'Car Brand',
            'car_engine' => 'Car Engine',
            'car_drive' => 'Car Drive',
        ];
    }
}
