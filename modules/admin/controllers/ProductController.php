<?php

namespace app\modules\admin\controllers;

use app\models\Atribute;
use app\models\Category;
use app\models\ImageUpload;
use Yii;
use app\models\Product;
use app\models\ProductSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionSetImage($id){
        $model = new ImageUpload;

        if (Yii::$app->request->isPost)
        {
            $product =$this->findModel($id);
            $file = UploadedFile::getInstance($model, 'image');


            if($product->saveImage($model->uploadFile($file,  $product->image)))
            {
                return $this->redirect(['view', 'id'=>$product->id]);
            }
        }
        return $this->render('image', ['model'=>$model]);

    }
    public function actionSetCategory($id)
    {
        $product = $this->findModel($id);
        $selectedCategory = $product->category->id;
        $categories =  ArrayHelper::map(Category::find()->all(), 'id', 'name');

        if(Yii::$app->request->isPost)
        {
            $category = Yii::$app->request->post('category');
            if($product->saveCategory($category))
            {
                return $this->redirect(['view', 'id'=>$product->id]);
            }

        }
        return $this->render('category', [
            'product'=>$product,
            'selectedCategory'=>$selectedCategory,
            'categories'=>$categories
        ]);
    }

    public function actionSetAtributes($id)
    {
        $product = $this->findModel($id);
        $selectedAtributes = $product->getSelectedAtributes();
        $atributes =Atribute::find()->all();

        if(Yii::$app->request->isPost)
        {
            $atributes = Yii::$app->request->post('atribute');
            $product_id = Yii::$app->request->post('product_id');
            $product->saveAtributes($atributes,$product_id );
            return $this->refresh();
        }

        return $this->render('atributes', [
            'selectedAtributes'=>$selectedAtributes,
            'atributes' => $atributes
        ]);
    }
}
