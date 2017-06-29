<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    /*
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['page-a', 'pageA'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['page-b', 'pageB'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['page-c', 'pageC'],
                        'allow' => true,
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
     * 
     */

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    /*
    public function actionIndex()
    {
        return $this->render('index');
    }
    
     * 
     * 
     */
    
     public function actionIndex(){
         /*
        header("Access-Control-Allow-Origin: *");
        $sql="SELECT * FROM province";
        $query=\Yii::$app->db->createCommand($sql)->queryAll();
        return \yii\helpers\Json::encode($query);
          * 
          */
         return $this->render('index');
    }
    public function actionPageA()
    {
        return $this->render('pageA');
    }
    public function actionPageB()
    {
        return $this->render('pageB');
    }
    public function actionPageC()
    {
        return $this->render('PageC');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
