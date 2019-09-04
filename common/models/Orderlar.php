<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orderlar".
 *
 * @property int $id
 * @property int $zakaz_id
 * @property int $odamlar
 * @property int $stol
 * @property int $stul
 * @property string $vaqt
 * @property int $summa
 *
 * @property Zakazlar $zakaz
 */
class Orderlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['zakaz_id', 'odamlar', 'stol', 'stul', 'vaqt', 'summa'], 'required'],
            [['zakaz_id', 'odamlar', 'stol', 'stul', 'summa'], 'integer'],
            [['vaqt'], 'safe'],
            [['zakaz_id'], 'exist', 'skipOnError' => true, 'targetClass' => Zakazlar::className(), 'targetAttribute' => ['zakaz_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zakaz_id' => 'Zakaz ID',
            'odamlar' => 'Odamlar',
            'stol' => 'Stol',
            'stul' => 'Stul',
            'vaqt' => 'Vaqt',
            'summa' => 'Summa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZakaz()
    {
        return $this->hasOne(Zakazlar::className(), ['id' => 'zakaz_id']);
    }
}
