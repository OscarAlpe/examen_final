<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Destacados', 'url' => ['/site/index']],
            ['label' => 'Comienzo inminente', 'url' => ['/site/comienzo']],
            ['label' => 'Todos', 'url' => ['/site/todos']],
            ['label' => 'Buscar', 'url' => ['/site/buscador']],
            ['label' => 'Solicitar información', 'url' => ['/site/informacion']],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<?php
NavBar::begin([
    'brandLabel' => '<img id="logo" width="55" src="imgs/logotipo-alpe-formacion.png" alt="Alpe">',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar- navbar-inverse navbar-fixed-botom',
    ],
]);

echo '<div class="navbar-right">';
echo '<div class="btn-toolbar" role="toolbar">';
echo Html::a('Portal Educativo', 'http://educa.alpeformacion.es', ['class'=>'btn btn-success', 'style' => 'border-radius:0; font-size: 25px;']);
echo Html::a('Web alpe', 'http://www.alpeformacion.es', ['class'=>'btn btn-success', 'style' => 'border-radius:0; font-size: 25px;']);
echo Html::a('Donde estamos', 'https://www.alpeformacion.es/contacto/', ['class'=>'btn btn-success', 'style' => 'border-radius:0; font-size: 25px;']);
echo Html::a('Datos de contacto', 'https://www.alpeformacion.es/contacto/', ['class'=>'btn btn-success', 'style' => 'border-radius:0; font-size: 25px;']);
echo '</div>';
echo '</div>';

NavBar::end();
?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Oscar Megía López <?= date('Y') ?></p>
        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
