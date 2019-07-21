<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_atribute".
 *
 * @property int $id
 * @property int $product_id
 * @property int $atribute_id
 *
 * @property Product $product
 * @property Atribute $atribute
 */
class ProductAtribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_atribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'atribute_id'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['atribute_id'], 'exist', 'skipOnError' => true, 'targetClass' => Atribute::className(), 'targetAttribute' => ['atribute_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'atribute_id' => 'Atribute ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtribute()
    {
        return $this->hasOne(Atribute::className(), ['id' => 'atribute_id']);
    }
    public static function getAtributeById($id)
    {
        return Atribute::find()->where(['id'=>$id])->one();
    }
}
