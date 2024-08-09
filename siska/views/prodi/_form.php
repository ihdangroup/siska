<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
use kartik\select2\Select2;
use siska\models\Fakultas;

/** @var yii\web\View $this */
/** @var siska\models\Prodi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fakultas_id')->widget(Select2::class,[
        'data' => Fakultas::dropdown(),
        'options' => ['placeholder' => 'Pilih Fakultas...'],
        'pluginOptions' => [
            'allowClear' => true
        ]
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>