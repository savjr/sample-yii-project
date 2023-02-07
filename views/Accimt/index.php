<?php

use app\models\Accimt;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\AccimtSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Accimts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accimt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Accimt'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'reg_no',
            'nic',
            'first_name',
            'last_name',
            'address',
            //'contact',
            //'dob',
            //'email:email',
            //'institute',
            //'division',
            //'level',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Accimt $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'reg_no' => $model->reg_no]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
