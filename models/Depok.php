<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depok".
 *
 * @property integer $id
 * @property integer $suhu
 * @property integer $kelembaban
 * @property integer $kecepatan_angin
 * @property integer $tekanan_udara
 * @property integer $intensitas_cahaya
 * @property integer $curah_hujan
 * @property string $waktu
 * @property string $status
 * @property string $baterai
 */
class Depok extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'depok';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['suhu', 'kelembaban', 'kecepatan_angin', 'tekanan_udara', 'intensitas_cahaya', 'curah_hujan'], 'integer'],
            [['waktu'], 'safe'],
            [['status', 'baterai'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'suhu' => 'Suhu',
            'kelembaban' => 'Kelembaban',
            'kecepatan_angin' => 'Kecepatan Angin',
            'tekanan_udara' => 'Tekanan Udara',
            'intensitas_cahaya' => 'Intensitas Cahaya',
            'curah_hujan' => 'Curah Hujan',
            'waktu' => 'Waktu',
            'status' => 'Status',
            'baterai' => 'Baterai',
        ];
    }
}
