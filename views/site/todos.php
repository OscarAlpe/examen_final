<?php
use yii\grid\GridView;
use yii\helpers\Html;


echo GridView::widget([
  'dataProvider' => $dataProvider,
  'id' => 'profile-panel-detailed-grid',
  'options' => ['class' => 'detail-grid-view table-responsive'],
  'columns' => [
    [
      'attribute' => 'codigoCurso',
    ],
    [
      'attribute' => 'titulo',
    ],
    [
      'attribute' => 'descripcion',
    ],
    [
      'attribute' => 'textoCorto',
    ],
    [
      'attribute' => 'fechaComienzo',
    ],
    [
      'attribute' => 'duracionHoras',
    ],
    [
      'class' => 'yii\grid\ActionColumn',
      'template' => '{verMas}',
      'buttons' => [
        'verMas' => function($url, $model, $key) {
            return Html::a('Ver mas', '@web/cursos/view?id=' . $key, ['class' => 'btn btn-primary']);
        }
      ]
    ],
  ],
]);
?>
