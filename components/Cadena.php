<?php

namespace app\components;

/**
 * Description of Cadena
 *
 * @author Oscar
 */
class Cadena extends \yii\base\BaseObject {
    private $nombre;
    private $vocales;
    
    public function __construct($nombre = "") {
        $this->nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($valor) {
        $this->nombre = $valor;

        return $this;
    }
    
    static function calcularVocales($nombre) {
        $salida = 0;
        
        $vocales = "aeiou";
    
        $texto = \str_replace(["á", "é", "í", "ó", "ú"],
                              ["a", "e", "i", "o", "u"], $nombre);
        
        for ($i=0; $i<strlen($texto); $i++) {
            if (strpos($vocales, strtolower($texto[$i])) !== false) {
                $salida++;
            }
        }
    
        return $salida; 
    }
    
    public function getCalcularVocales() {
        return Cadena::calcularVocales($this->nombre);
    }

    public function getLongitud() {
        return mb_strlen($this->nombre);
    }
}
