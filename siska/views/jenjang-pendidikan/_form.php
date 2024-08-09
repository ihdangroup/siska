<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var siska\models\JenjangPendidikan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jenjang-pendidikan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenjang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
