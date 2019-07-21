<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $description
 * @property string $meta_title
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['meta_title', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'Meta Title',
            'name' => 'Name',
            'description' => 'Description',
            'parent_id' => 'Parent_id',
        ];
    }
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
    public static function getAll()
    {
        return Category::find()->all();
    }
    public static function getParentCategory()
    {
        return Category::find()->where(['parent_id' => '0'])->all();
    }
    public static function getProductsByCategory($id)
    {
        return Product::find()->where(['category_id'=>$id])->all();
    }

}
