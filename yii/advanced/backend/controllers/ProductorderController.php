<?php

namespace backend\controllers;

use Yii;
use backend\models\Productorder;
use backend\models\ProductorderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductorderController implements the CRUD actions for Productorder model.
 */
class ProductorderController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Productorder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductorderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $cusList = \backend\models\Customer::find()->all();
        $prodList = \backend\models\Product::find()->all();
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            "cusList"=>$cusList,
            "prodList"=>$prodList,
        ]);
    }

    /**
     * Displays a single Productorder model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $cusList = \backend\models\Customer::find()->all();
        $prodList = \backend\models\Product::find()->all();
        return $this->render('view', [
            'model' => $this->findModel($id),
            
            "cusList"=>$cusList,
            "prodList"=>$prodList,
        ]);
    }

    /**
     * Creates a new Productorder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Productorder();
        $cusList = \backend\models\Customer::find()->all();
        $prodList = \backend\models\Product::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                
            "cusList"=>$cusList,
            "prodList"=>$prodList,
            ]);
        }
    }

    /**
     * Updates an existing Productorder model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $cusList = \backend\models\Customer::find()->all();
        $prodList = \backend\models\Product::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                
            "cusList"=>$cusList,
            "prodList"=>$prodList,
            ]);
        }
    }

    /**
     * Deletes an existing Productorder model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Productorder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Productorder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Productorder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
