<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property int $codigoCurso
 * @property string|null $titulo
 * @property string|null $descripcion
 * @property string|null $textoCorto
 * @property string|null $textoLargo
 * @property string|null $fechaComienzo
 * @property string|null $fechaFin
 * @property int|null $duracionHoras
 * @property int|null $destacado
 * @property string|null $fotoPortada
 * @property string|null $pdf
 * @property int|null $comenzado
 * @property int|null $finalizado
 *
 * @property Inscripciones[] $inscripciones
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['textoCorto', 'textoLargo'], 'string'],
            [['fechaComienzo', 'fechaFin'], 'safe'],
            [['duracionHoras', 'destacado', 'comenzado', 'finalizado'], 'integer'],
            [['titulo', 'descripcion', 'fotoPortada', 'pdf'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigoCurso' => 'Codigo Curso',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'textoCorto' => 'Texto Corto',
            'textoLargo' => 'Texto Largo',
            'fechaComienzo' => 'Fecha Comienzo',
            'fechaFin' => 'Fecha Fin',
            'duracionHoras' => 'Duracion Horas',
            'destacado' => 'Destacado',
            'fotoPortada' => 'Foto Portada',
            'pdf' => 'Pdf',
            'comenzado' => 'Comenzado',
            'finalizado' => 'Finalizado',
        ];
    }

    /**
     * Gets query for [[Inscripciones]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInscripciones()
    {
        return $this->hasMany(Inscripciones::className(), ['curso' => 'codigoCurso']);
    }
}
