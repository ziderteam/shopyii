<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \backend\models\userProfile;
use \yii\data\ActiveDataProvider;

class UserprofileController extends Controller{
   public function actionUser(){
       $id = \Yii::$app->request->post('id','');
       // id = '' 
       $user = \common\models\User::find()->where(['id'=>$id])->all();
       return \yii\helpers\Json::encode($user);
    }
    public function actionIndex()
    {
        $model = UserProfile::find();
        $dataProvider = new ActiveDataProvider([
           'query' => $model,
        ]);
        return $this->render("index",[
            'dataProvider'=>$dataProvider
        ]);
    }
    public function actionCreate(){
        /*$model = new UserProfile();
    
        if ($model->load(Yii::$app->request->post())) {
            
             try{
            
                $post       = \Yii::$app->request->post();
                $fname      = $post["UserProfile"]['fname'];
                $lname      = $post["UserProfile"]['lname'];
                $gender     = $post["UserProfile"]['gender'];
                $tel        = $post["UserProfile"]['tel'];
                $address    = $post["UserProfile"]['address'];
                $image    = $post["UserProfile"]['image'];

                $sql="INSERT INTO 
                    user_profile(fname,lname,gender,tel,address,image)
                    VALUES(:fname,:lname,:gender,:tel,:address,:image)
                ";
                $save = Yii::$app->db->createCommand($sql,[
                    ':fname' =>$fname,
                    ':lname'=>$lname,
                    ':gender'=>$gender,
                    ':tel'=>$tel,
                    ':address'=>$address,
                    ':image'=>$image
                ])->execute();
                /*
                 Yii::$app->db->createCommand('Insert into user_profile(fname, lname, gender, tel, address, image) 
                 *          VALUES(:fname, :lname, :gender, :tel, :address, :image', [':fname'=>$fname])->execute(); // example like laravel
                 * 
                 
                    return $this->render('index', ['model'=>$model]);

            } catch (\yii\db\Exception $ex) {
                echo $ex->getMessage();
            }
            
            $user_id = \Yii::$app->user->identity->id;
            echo $user_id;
            
            
            $user_id = \Yii::$app->user->identity->id;
            $model->user_id = $user_id;
            if($model->save()){
                return $this->render('index');
            }
             * 
             
        }

        return $this->render("create",[
             'model'=>$model
        ]);*/
        
        $model = new UserProfile();
        if($model->load(Yii::$app->request->post())){
            //$user_id = \Yii::$app->user->identity->id;
            //$model->user_id = $user_id;
            if($model->save()){
                $this->goHome();
            }

        }

        return $this->render("create",[
             'model'=>$model
        ]);
    }
    public function actionUpdate($id){
        $model = UserProfile::findOne($id);
        if($model->load(Yii::$app->request->post())){
            //$user_id = \Yii::$app->user->identity->id;
            //$model->user_id = $id;
            if($model->save()){
                $this->goHome();
            }

        }

        return $this->render("update",[
             'model'=>$model
        ]);
    }
 
    public function actionDelete($id){
       $delete = UserProfile::findOne($id)->delete();
       if($delete){
           $this->goHome();
       }
   }
   public function goHome(){
       return $this->redirect(['index']);
   }


}
