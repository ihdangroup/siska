<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/** @var yii\web\View $this */
/** @var siska\models\Agama $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="agama-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_agama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>