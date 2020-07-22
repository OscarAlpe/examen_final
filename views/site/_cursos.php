<?php
use app\widgets\Cursos;
?>

<?= Cursos::widget([
    'codigoCurso' => $model->codigoCurso,
    'titulo' => $model->titulo,
    'descripcion' => $model->descripcion,
    'fotoPortada' => $model->fotoPortada,
]) ?>
