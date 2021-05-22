<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model frontend\models\Data */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <?= $form->field($model, 'kategori')->widget(Select2::classname(), [
    'data' => ['1'=>'Pemasukan', '2'=>'Pengeluaran'],
    'options' => ['placeholder' => '...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);
    ?>
<?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => '...'],
    'pluginOptions' => [
        'autoclose'=>true
    ]
]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
