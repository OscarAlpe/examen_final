<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<?php
if (Yii::$app->session->hasFlash('enviadaInscripcion')) {
    echo '<div class="alert alert-success">';
    echo 'Inscripción realizada';
    echo '</div>';
}
?>

<?php
  if (isset($_GET['curso'])) {
    $model->curso = $_GET['curso'];
    $titulo = $_GET['titulo'];
  }
?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

            <?= $form->field($model, 'nombre')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'apellidos') ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'fechaNacimiento') ?>

            <?= $form->field($model, 'estudios') ?>

            <?= $form->field($model, 'telefono') ?>

            <?= $form->field($model, 'desempleado')->dropDownList([0 => 'No', 1 => 'Si']) ?>

            <?= $form->field($model, 'curso')->input('number', ['readonly' => true]) ?>

            <?= $form->field($model, 'curso')->input('number')->render('<b>Se inscribirá en el curso nº ' . $model->curso . ' - ' . $titulo . '</b>') ?>

            <div class="form-group">
                <?= Html::submitButton('Inscribirse', ['class' => 'btn btn-primary', 'name' => 'inscribirse-button']) ?>
            </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
