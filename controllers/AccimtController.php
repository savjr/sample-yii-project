<?php

namespace app\controllers;

use app\models\Accimt;
use app\models\AccimtSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AccimtController implements the CRUD actions for Accimt model.
 */
class AccimtController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Accimt models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new AccimtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Accimt model.
     * @param int $reg_no Reg No
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($reg_no)
    {
        return $this->render('view', [
            'model' => $this->findModel($reg_no),
        ]);
    }

    /**
     * Creates a new Accimt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Accimt();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'reg_no' => $model->reg_no]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Accimt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $reg_no Reg No
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($reg_no)
    {
        $model = $this->findModel($reg_no);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'reg_no' => $model->reg_no]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Accimt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $reg_no Reg No
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($reg_no)
    {
        $this->findModel($reg_no)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Accimt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $reg_no Reg No
     * @return Accimt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($reg_no)
    {
        if (($model = Accimt::findOne(['reg_no' => $reg_no])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
