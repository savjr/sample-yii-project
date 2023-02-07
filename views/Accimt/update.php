<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Accimt $model */

$this->title = Yii::t('app', 'Update Accimt: {name}', [
    'name' => $model->reg_no,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accimts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->reg_no, 'url' => ['view', 'reg_no' => $model->reg_no]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="accimt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
