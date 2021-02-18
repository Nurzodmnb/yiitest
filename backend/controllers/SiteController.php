<?php
namespace backend\controllers;

use backend\models\ArticleForm;
use backend\models\Category;
use backend\models\User;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\UploadedFile;
use function Couchbase\defaultDecoder;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    /**
     * {@inheritdoc}
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
    public function actionIndex()
    {
        return $this->render('index');
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
            $model->password = '';

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

    public function actionArticle()
    {
        $articledata = new ArticleForm();
        $users = User::find()->asArray()->all();
        $users = ArrayHelper::map($users, 'id','name');
        $categoriya = Category::find()->asArray()->all();
        $categories = ArrayHelper::map($categoriya, 'id', 'title');
        if ($articledata->load(Yii::$app->request->post()))
        {
            $articledata->image = UploadedFile::getInstance($articledata, 'image');
            $articledata->image = $articledata->upload();
            $articledata->save();
        }
        return $this->render('article',
            [
                'model' => $articledata,
                'kategoriya' => $categories,
                'foydalanuvchi' => $users
            ]);
    }
}
