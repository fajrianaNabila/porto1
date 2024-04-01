<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "struktur".
 *
 * @property int $id
 * @property string $isi
 */
class Struktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'struktur';
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
