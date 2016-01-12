<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "publicity".
 *
 * @property integer $id
 * @property string $title
 * @property string $link
 * @property string $image
 * @property string $description
 * @property integer $status
 */
class Publicity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publicity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'link', 'image', 'description', 'status'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['title', 'link', 'image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'link' => 'Link',
            'image' => 'Image',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
