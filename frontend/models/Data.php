<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property int $id
 * @property string $nama
 * @property int $nominal
 * @property int $kategori
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nominal', 'kategori'], 'required'],
            [['nominal', 'kategori'], 'integer'],
            [['nama', 'tanggal'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nominal' => 'Nominal',
            'tanggal' => 'Tanggal',
            'kategori' => 'Kategori',
        ];
    }
}
