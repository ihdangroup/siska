<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/** @var yii\web\View $this */
/** @var siska\models\AgamaSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="agama-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_agama') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>