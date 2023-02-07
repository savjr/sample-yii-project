<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AccimtSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="accimt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'reg_no') ?>

    <?= $form->field($model, 'nic') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'institute') ?>

    <?php // echo $form->field($model, 'division') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
