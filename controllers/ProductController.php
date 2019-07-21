<?php

namespace app\controllers;

use app\models\Atribute;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Product;
use app\models\ProductAtribute;
use app\models\Category;
use yii\web\NotFoundHttpException;
use yii\data\ActiveDataProvider;


class ProductController extends Controller
{

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

    public function actionSingle($id)
    {
        $product = Product::findOne($id);
        $latest = Product::getLatest();
        $atributes = Atribute::getAll($id);
        return $this->render('single',[
            'product'=>$product,
            'latest'=>$latest,
            'atributes'=>$atributes
        ]);
    }
}