<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atribute".
 *
 * @property int $id
 * @property string $name
 * @property int $code
 *
 * @property ProductAtribute[] $productAtributes
 */
class Atribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'integer'],
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
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])
            ->viaTable('product_atribute', ['atribute_id' => 'id']);
    }
}
