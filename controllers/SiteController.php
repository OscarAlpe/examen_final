<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Cursos;
use yii\data\ActiveDataProvider;
use app\models\SolicitarInformacion;
use app\models\Inscribirse;
use app\models\TodosSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Cursos::find()->select("cursos.*");
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
              'pageSize' => 4,
            ],
        ]);

        return $this->render('index',[
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionComienzo()
    {
        $query = Cursos::find()->select("cursos.*")
          ->where(['=', 'cursos.comenzado', 0]);
        ;

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
              'pageSize' => 4,
            ],
        ]);

        return $this->render('index',[
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionTodos()
    {
        $query = Cursos::find()->select("codigoCurso, titulo, descripcion, textoCorto, fechaComienzo, duracionHoras");

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
              'pageSize' => 20,
            ],
        ]);

        return $this->render('todos',[
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionBuscador()
    {
        $searchModel = new TodosSearch();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('buscador',[
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }

    public function actionInformacion()
    {
        $model = new SolicitarInformacion();
        if ($model->load(Yii::$app->request->post()) 
                &&
            $model->validate()) {
            Yii::$app->session->setFlash('enviadaSolicitud');
            
            return $this->refresh();
        }
        
        return $this->render('informacion', [
            'model' => $model,
        ]);
    }

    public function actionInscribirse()
    {
        $model = new Inscribirse();
        if ($model->load(Yii::$app->request->post()) 
                &&
            $model->validate()) {
            Yii::$app->session->setFlash('enviadaInscripcion');
            
            return $this->refresh();
        }
        
        return $this->render('inscribirse', [
            'model' => $model,
        ]);
    }

}
