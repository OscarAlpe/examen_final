<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Cursos destacados</h1>

        <p class="lead">En el siguiente listado podemos ver los cursos pricipales que Alpe Formacion tiene actualmente</p>

        <p>
          <?= Html::a('Ver todos los cursos', '@web/site/todos', ['class' => 'btn btn-lg btn-primary']) ?>
          <?= Html::a('Cursos comienzo inminente', '@web/site/comienzo', ['class' => 'btn btn-lg btn-primary']) ?>
          <?= Html::a('Buscar un curso', '@web/site/buscador', ['class' => 'btn btn-lg btn-primary']) ?>
        </p>
    </div>

    <div class="body-content">

<?php 
use yii\widgets\ListView;
?>

<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_cursos',
    'layout' => '{items}{pager}',
]) ?>

    </div>
</div>
