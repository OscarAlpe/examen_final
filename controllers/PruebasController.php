<?php

namespace app\controllers;

use Yii;
use app\components\Cadena;

class PruebasController extends \yii\web\Controller
{
    public $layout = 'pruebas';
    
    public function actionUno() {
        return $this->render("uno");
    }

    public function actionDos() {
        $fechaActual = function()
                        {
                            $fecha = new \DateTime();
                            $fecha->modify('+2 day');
                            $fecha->add(new \DateInterval('PT10M'));
                            return $fecha->format('d-m-Y H:i:s');
                        };

        return $this->render("dos", [
                "fechaActual" => $fechaActual()
            ]);
    }
    
    public function actionTres() {
        return $this->render("tres");
    }
    
    public function actionIndex() {
        return $this->render("index");
    }
    
    public function actionCuatro() {
        $c = new Cadena("ejemplo del camión");
        return $this->render("cuatro", [
            "texto" => $c->getNombre(),
            "numero" => $c->getCalcularVocales(),
            "longitud" => $c->getLongitud(),
        ]);
    }

}
