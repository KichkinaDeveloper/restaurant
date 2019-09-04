<?php
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use common\models\Zakazlar;
use common\models\Orderlar;

class MijozController extends Controller{
    public function actionIndex(){
        $model = new Zakazlar();

        $model = $model::find()->all();

        return $this->render('index',[ 
        'model' => $model
        ]);
    }

    public function actionCreate()
    {
        $model = new Zakazlar();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $a = $_POST["Zakazlar"]["price"];
            
            return $this->redirect(['mijoz/index']);
        }
        
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Zakazlar::findOne($id);
        $model->delete();

        return $this->redirect(Yii::$app->request->referrer); // o'ziga qaytarib qo'yadi
    }
}
?>