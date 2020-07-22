<?php

namespace app\widgets;

use yii\helpers\Html;

/**
 * Description of Cursos
 *
 * @author Oscar
 */
class Cursos extends \yii\bootstrap\Widget {
    public $codigoCurso;
    public $fotoPortada;
    public $titulo;
    public $descripcion;
    
    public function init() {
        parent::init();
        
    }
    
    public function run() {
        $salida = '';

        $salida .= '<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">';
        $salida .=  '<div class="thumbnail">';
        $salida .= Html::img("@web/imgs/" . $this->fotoPortada, ['style' => 'width: 320px; height: 200px;']);
        $salida .=    '<div class="caption">';
        $salida .=      '<h3>' . $this->titulo . '</h3>';
        $salida .=      '<p>' . $this->descripcion . '</p>';
        $salida .=    '</div>';
        $salida .=    '<div class="row">';
        $salida .=      '<span class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></span>';
        $salida .=      Html::a("Ver mas", "@web/cursos/view?id=" . $this->codigoCurso, ['class' => 'btn btn-primary col-sm-2 col-md-2 col-lg-2 col-xl-2']);
        $salida .=      '<span class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></span>';
        $salida .=      Html::a("Solicitar informacion", "@web/site/informacion?titulo=" . $this->titulo, ['class' => 'btn btn-primary col-sm-4 col-md-4 col-lg-4 col-xl-4']);
        $salida .=      '<span class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></span>';
        $salida .=      Html::a("Inscribirse", "@web/site/inscribirse?curso=" . $this->codigoCurso . '&titulo=' . $this->titulo, ['class' => 'btn btn-primary col-sm-2 col-md-2 col-lg-2 col-xl-2']);
        $salida .=    '</div>';
        $salida .=  '</div>';
        $salida .= '</div>';
        
        return $salida;
    }
}
