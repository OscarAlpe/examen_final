<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CursosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codigoCurso') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'textoCorto') ?>

    <?= $form->field($model, 'textoLargo') ?>

    <?php // echo $form->field($model, 'fechaComienzo') ?>

    <?php // echo $form->field($model, 'fechaFin') ?>

    <?php // echo $form->field($model, 'duracionHoras') ?>

    <?php // echo $form->field($model, 'destacado') ?>

    <?php // echo $form->field($model, 'fotoPortada') ?>

    <?php // echo $form->field($model, 'pdf') ?>

    <?php // echo $form->field($model, 'comenzado') ?>

    <?php // echo $form->field($model, 'finalizado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
