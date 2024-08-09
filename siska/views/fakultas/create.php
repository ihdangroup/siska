<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Fakultas $model */

$this->title = 'Tambah Fakultas';
$this->params['breadcrumbs'][] = ['label' => 'Fakultas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fakultas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>