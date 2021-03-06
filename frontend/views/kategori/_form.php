<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2
/* @var $this yii\web\View */
/* @var $model frontend\models\Kategori */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'jenis')->widget(Select2::classname(), [
    'data' => ['1'=>'Pemasukan', '2'=>'Pengeluaran'],
    'options' => ['placeholder' => '...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);
?>

    <?= $form->field($model, 'prioritas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
