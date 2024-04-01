<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $isi
 * @property string|null $img
 */
class About extends \yii\db\ActiveRecord
{
    public $image; //tambahkan
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi'], 'string'],
            [['title', 'img'], 'string', 'max' => 255],
            ['image','file','extensions' =>['png','jpg','gif'],'maxSize' => 1920*1080*10],
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
