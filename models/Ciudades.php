<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudades".
 *
 * @property int $id
 * @property string|null $nombre
 * @property float|null $habitantes
 * @property string|null $escudo
 * @property string|null $mapa
 */
class Ciudades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ciudades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['habitantes'], 'number'],
            [['nombre', 'escudo', 'mapa'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'habitantes' => 'Habitantes',
            'escudo' => 'Escudo',
            'mapa' => 'Mapa',
        ];
    }
}
