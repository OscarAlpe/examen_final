<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cursos */

$this->title = 'Update Cursos: ' . $model->codigoCurso;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codigoCurso, 'url' => ['view', 'id' => $model->codigoCurso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cursos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
