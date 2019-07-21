<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property int $product_id
 * @property int $status
 */
class Comment extends \yii\db\ActiveRecord
{
    const STATUS_ALLOW = 1;
    const STATUS_DISALLOW = 0;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'product_id', 'status'], 'integer'],
            [['text'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'user_id' => 'User ID',
            'product_id' => 'product ID',
            'status' => 'Status',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(product::className(), ['id' => 'product_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }
    public function isAllowed()
    {
        return $this->status;
    }
    public function allow()
    {
        $this->status = self::STATUS_ALLOW;
        return $this->save(false);
    }
    public function disallow()
    {
        $this->status = self::STATUS_DISALLOW;
        return $this->save(false);
    }

}
