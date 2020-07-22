<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cursos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cursos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'textoCorto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'textoLargo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fechaComienzo')->textInput() ?>

    <?= $form->field($model, 'fechaFin')->textInput() ?>

    <?= $form->field($model, 'duracionHoras')->textInput() ?>

    <?= $form->field($model, 'destacado')->textInput() ?>

    <?= $form->field($model, 'fotoPortada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pdf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comenzado')->textInput() ?>

    <?= $form->field($model, 'finalizado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
