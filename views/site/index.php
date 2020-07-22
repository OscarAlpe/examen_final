<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Cursos destacados</h1>

        <p class="lead">En el siguiente listado podemos ver los cursos pricipales que Alpe Formacion tiene actualmente</p>

        <p>
          <a class="btn btn-lg btn-primary" href="site/todos">Ver todos los cursos</a>
          <a class="btn btn-lg btn-primary" href="site/comienzo">Cursos comienzo inminente</a>
          <a class="btn btn-lg btn-primary" href="site/buscador">Buscar un curso</a>
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
