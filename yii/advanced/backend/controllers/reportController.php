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
class ReportController extends Controller
{
    /**
     * @inheritdoc
     */
    
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
                        'actions' => ['category', 'Category'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['customer', 'Customer'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['product', 'Product'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['productorder', 'Product Order'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['allsales', 'AllSales'],
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
    public function actionCategory()
    {
        $sql="SELECT * FROM category";
        $query=\Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('category', [
            'dataProvider' => $query
        ]);
    }
    public function actionCustomer()
    {
        $sql="SELECT * FROM customer";
        $query=\Yii::$app->db->createCommand($sql)->queryAll();
        return $this->render('customer', [
            'dataProvider' => $query
        ]);
    }
    public function actionProduct()
    {
        $query=\Yii::$app->db->createCommand('SELECT p.*, c.cate_name FROM product p inner join category c on p.cate_id = c.cate_id')->queryAll();
        return $this->render('product', [
            'dataProvider' => $query
        ]);
    }
    public function actionProductorder()
    {
        $query=\Yii::$app->db->createCommand('SELECT p.*, c.name as cus_name, pr.prod_name FROM productorder p inner join customer c on p.cus_id = c.cus_id '
                . 'inner join product pr on p.prod_id = pr.prod_id')->queryAll();
        return $this->render('productorder', [
            'dataProvider' => $query
        ]);
    }
    public function actionAllsales()
    {
        $query=\Yii::$app->db->createCommand("SELECT c.name as cus_name, p.prod_name,  SUM(po.order_number) as product_count,  SUM(p.pro_price * po.order_number) as product_price FROM productorder po 
INNER JOIN product p ON po.prod_id = p.prod_id 
INNER JOIN customer c ON po.cus_id = c.cus_id
GROUP BY cus_name, prod_name
ORDER BY cus_name")->queryAll();
        return $this->render('allsales', [
            'dataProvider' => $query
        ]);
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
