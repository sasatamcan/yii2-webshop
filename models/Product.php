<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property string $image
 * @property int $viewed
 * @property int $user_id
 * @property int $status
 * @property int $category_id
 *
 * @property Comment[] $comments
 * @property ProductAtribute[] $productAtributes
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'content'], 'string', 'max' => 255],
            [['price'], 'number'],       
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
            'content' => 'Content',
            'price' => 'Price',
            'image' => 'Image',
            'viewed' => 'Viewed',
            'user_id' => 'User ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
        ];
    }
    public function saveImage($filename)
    {
        $this->image=$filename;
        return $this->save(false);
    }
    public function getImage()
    {
        return ($this->image) ? '/uploads/' .$this->image : '/no-image.png/';
    }


    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }
    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete();
    }
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    public function saveCategory($category_id)
    {
        $category = Category::findOne($category_id);
        if( $category != null){
            $this->link('category', $category);
            return true;
        }

    }
    public function getAtributes()
    {
        return $this->hasMany(Atribute::className(), ['id' => 'atribute_id'])
            ->viaTable('product_atribute', ['product_id' => 'id']);
    }
    public function getSelectedAtributes()
    {
        $selectedIds = $this->getAtributes()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }
    public function saveAtributes($atributes, $product_id)
    {
        $connection = Yii::$app->getDb();
        if(is_array($atributes))
        {
            foreach($atributes as $key=>$value)
            {

                $command = $connection->createCommand("SELECT * FROM product_atribute WHERE atribute_id =".$key." AND product_id=".$product_id);
                $result = $command->queryOne();
                if(empty($result)){
                    $sql = "INSERT INTO product_atribute (product_id, atribute_id, value)
                VALUES ('".$product_id."','".$key."','".$value."')";
                    \Yii::$app->db->createCommand($sql)->execute();
                }
                else{
                    $sql = "UPDATE product_atribute SET value = '".$value."' WHERE atribute_id=".$key." AND product_id=".$product_id;
                        \Yii::$app->db->createCommand($sql)->execute();
                }
            }
        }
    }


}
