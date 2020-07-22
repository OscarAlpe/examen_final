<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Description of SolicitarInformacion
 *
 * @author Oscar
 */
class SolicitarInformacion extends Model {
    public $nombre;
    public $apellidos;
    public $fechaNacimiento;
    public $nombreCurso;
    public $correo;
    public $telefono;
    
    function rules() {
        return [
            [['telefono'], 'required'],
            ['correo', 'email'],
            ['fechaNacimiento', 'date'],
            [['nombre', 'apellidos', 'nombreCurso'], 'safe'],
       ];
    }
    
    function attributeLabels() {
        return [
            'nombre' => 'Introduce tu nombre',
            'apellidos' => 'Introduce tus apellidos',
            'fechaNacimiento' => 'Introduce tu fecha de nacimiento (formato: dd/mm/aaaa)',
            'nombreCurso' => 'Introduce el nombre del curso',
            'correo' => 'Introduce tu correo electrónico',
            'telefono' => 'Introduce tu teléfono',
        ];
    }
    
    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            $contenido = "Nombre: " . $this->nombre . "\n";
            $contenido .= "Apellidos: " . $this->apellidos . "\n";
            $contenido .= "Fecha nacimiento: " . $this->fechaNacimiento . "\n";
            $contenido .= "Nombre del curso: " . $this->nombreCurso . "\n";
            $contenido .= "Teléfono: " . $this->telefono;
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->correo => $this->nombre . ' ' . $this->apellidos])
                ->setReplyTo([$this->correo => $this->nombre . ' ' . $this->apellidos])
                ->setSubject("Solicitar información")
                ->setTextBody($contenido)
                ->send();

            return true;
        }
        return false;
    }
    
}
