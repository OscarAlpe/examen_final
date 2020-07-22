<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<?php
if (Yii::$app->session->hasFlash('enviadaSolicitud')) {
    echo '<div class="alert alert-success">';
    echo 'Solicitud de información enviada';
    echo '</div>';
}
?>

<?php
  if (isset($_GET['titulo'])) {
    $model->nombreCurso = $_GET['titulo'];
  }
?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'apellidos') ?>

            <?= $form->field($model, 'fechaNacimiento') ?>

            <?= $form->field($model, 'nombreCurso') ?>

            <?= $form->field($model, 'correo') ?>

            <?= $form->field($model, 'telefono') ?>

            <div class="form-group">
                <?= Html::submitButton('Solicitar informacion', ['class' => 'btn btn-primary', 'name' => 'informacion-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
