<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "misi".
 *
 * @property int $id
 * @property string $isi
 */
class Misi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'misi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi'], 'required'],
            [['isi'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isi' => 'Isi',
        ];
    }
}
