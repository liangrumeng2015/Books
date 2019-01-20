<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $booksName
 * @property double $booksPrice
 * @property int $booksNum
 * @property string $booksAuthor
 */
class books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['booksName', 'booksPrice', 'booksNum', 'booksAuthor'], 'required'],
            [['booksPrice'], 'number'],
            [['booksNum'], 'integer'],
            [['booksName', 'booksAuthor'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'booksName' => 'Books Name',
            'booksPrice' => 'Books Price',
            'booksNum' => 'Books Num',
            'booksAuthor' => 'Books Author',
        ];
    }
}
