<?php


namespace backend\controllers;


use backend\models\Category;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CategoryController extends Controller
{
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
    public function actionIndex()
    {
        $read = Category::find()->all();
        return $this->render('index', ['categories' => $read]);
    }

    public function actionCreate()
    {
        $model = new Category();
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->save();
            return $this->redirect(['category/index']);
        }
        return $this->render('add', ['model' => $model]);
    }

    public function actionUpdate($id)
    {
        $model = Category::find()->where(['id' => $id])->one();
        // $id not found in database
        if($model === null)
            throw new NotFoundHttpException('The requested page does not exist.');

        // update record
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }

        return $this->render('update', ['model' => $model]);

    }

    public function actionDelete($id)
    {
        $model = Category::find()->where(['id' => $id])->one();
        if($model === null)
        {
            throw new NotFoundHttpException('Ma\'lumot topilmadi.');
        }

        else
            $model->delete();
        return $this->redirect(['category/index']);
    }

}