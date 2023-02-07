<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Accimt $model */

$this->title = $model->reg_no;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accimts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="accimt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'reg_no' => $model->reg_no], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'reg_no' => $model->reg_no], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reg_no',
            'nic',
            'first_name',
            'last_name',
            'address',
            'contact',
            'dob',
            'email:email',
            'institute',
            'division',
            'level',
            'status',
        ],
    ]) ?>

</div>
