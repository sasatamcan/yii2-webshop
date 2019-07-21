<?php

namespace app\models;

use Yii;
use app\models\ProductAtribute;

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
    public static function getAll($product_id)
    {
        return ProductAtribute::find()->where(['product_id'=>$product_id])->all();
    }
    public function getAtributeValue($atribute_id)
    {
        $result = (new \yii\db\Query())->select(['value','atribute_id'])->from('product_atribute')->where(['atribute_id' =>$atribute_id])->groupBy(['value'])->all();
        return $result;
    }
    public static function getAtributeById($id)
    {
        return Atribute::find()->where(['id'=>$id])->one();
    }
}
