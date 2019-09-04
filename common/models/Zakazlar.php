<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "zakazlar".
 *
 * @property int $id
 * @property string $name
 * @property int $persons
 * @property int $cstol
 * @property int $cstul
 * @property string $data
 * @property int $price
 *
 * @property Orderlar[] $orderlars
 */
class Zakazlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakazlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'persons', 'cstol', 'cstul', 'data', 'price'], 'required'],
            [['persons', 'cstol', 'cstul', 'price'], 'integer'],
            [['data'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'persons' => 'Odamlar',
            'cstol' => 'Stol',
            'cstul' => 'Stul',
            'data' => 'Vaqt',
            'price' => 'Narxi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderlars()
    {
        return $this->hasMany(Orderlar::className(), ['zakaz_id' => 'id']);
    }
}
