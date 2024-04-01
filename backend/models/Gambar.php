<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "gambar".
 *
 * @property int $id
 * @property string $img
 */
class Gambar extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gambar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
      
            [['img'], 'string', 'max' => 255],
            ['image', 'file', 'extensions' => ['png','jpg','gif','jpeg'], 'maxSize' => 1024*1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
        ];
    }
}
