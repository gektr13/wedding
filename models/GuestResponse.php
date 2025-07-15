<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Модель для хранения ответов гостей
 *
 * @property int $id
 * @property string $fio
 * @property int $guest_count
 * @property string|null $guests
 * @property string|null $alco
 * @property string $created_at
 */
class GuestResponse extends ActiveRecord
{
    public static function tableName()
    {
        return 'guest_responses';
    }

    public function rules()
    {
        return [
            [['fio', 'guest_count'], 'required'],
            [['guest_count'], 'integer'],
            [['guests', 'alco'], 'string'],
            [['fio'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'fio' => 'Имя и Фамилия',
            'guest_count' => 'Количество гостей',
            'guests' => 'Фамилия и имена гостей',
            'alco' => 'Предпочтения по алкоголю',
            'created_at' => 'Дата отправки',
        ];
    }
} 