<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Wilayah $model */

$this->title = 'Tambah Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>