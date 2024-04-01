<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tujuan".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $isi
 * @property string|null $img
 */
class Tujuan extends \yii\db\ActiveRecord
{
    public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tujuan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
            ['image', 'file', 'extensions' => ['png','jpg','gif','jpeg'], 'maxSize' => 1920*1080*10], //tambahkan
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'isi' => 'Isi',
            'img' => 'Img',
        ];
    }
}
