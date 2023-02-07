<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Accimt $model */

$this->title = Yii::t('app', 'Create Accimt');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Accimts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accimt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
