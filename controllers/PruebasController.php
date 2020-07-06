<?php

namespace app\controllers;

use Yii;

class PruebasController extends \yii\web\Controller
{
    public function actionUno() {
        return "Hola Mundo";
    }

    public function actionDos() {
        $fechaActual = function()
                        {
                            $fecha = new \DateTime();
                            $fecha->modify('+2 day');
                            $fecha->add(new \DateInterval('PT10M'));
                            echo $fecha->format('d-m-Y H:i:s');
                        };
        return $fechaActual();
    }
}
