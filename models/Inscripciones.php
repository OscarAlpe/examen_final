<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inscripciones".
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property string|null $email
 * @property string|null $fechaNacimiento
 * @property string|null $estudios
 * @property string|null $telefono
 * @property int|null $Desempleado
 * @property int|null $curso
 *
 * @property Cursos $curso0
 */
class Inscripciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inscripciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechaNacimiento'], 'safe'],
            [['Desempleado', 'curso'], 'integer'],
            [['nombre', 'apellidos', 'estudios', 'telefono'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 50],
            [['curso'], 'exist', 'skipOnError' => true, 'targetClass' => Cursos::className(), 'targetAttribute' => ['curso' => 'codigoCurso']],
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
            'apellidos' => 'Apellidos',
            'email' => 'Email',
            'fechaNacimiento' => 'Fecha Nacimiento',
            'estudios' => 'Estudios',
            'telefono' => 'Telefono',
            'Desempleado' => 'Desempleado',
            'curso' => 'Curso',
        ];
    }

    /**
     * Gets query for [[Curso0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurso0()
    {
        return $this->hasOne(Cursos::className(), ['codigoCurso' => 'curso']);
    }
}
