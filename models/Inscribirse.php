<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of Inscribirse
 *
 * @author Oscar
 */
class Inscribirse extends Model {
    public $nombre;
    public $apellidos;
    public $email;
    public $fechaNacimiento;
    public $estudios;
    public $telefono;
    public $desempleado;
    public $curso;
    
    function rules() {
        return [
            [['nombre', 'apellidos', 'email', 'fechaNacimiento', 'estudios', 'telefono', 'desempleado', 'curso'], 'required'],
            ['email', 'email'],
            ['fechaNacimiento', 'date'],
            [['nombre', 'apellidos', 'estudios', 'curso'], 'safe'],
            ['desempleado', 'in', 'range' => [0, 1]],
       ];
    }
    
    function attributeLabels() {
        return [
            'nombre' => 'Introduce tu nombre',
            'apellidos' => 'Introduce tus apellidos',
            'email' => 'Introduce tu correo electrónico',
            'fechaNacimiento' => 'Introduce tu fecha de nacimiento (formato: dd/mm/aaaa)',
            'estudios' => 'Introduce tus estudios',
            'telefono' => 'Introduce tu teléfono',
            'desempleado' => '¿Estas desempleado?',
            'curso' => 'Curso a inscribirse',
        ];
    }
    
}
