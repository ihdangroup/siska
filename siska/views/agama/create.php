<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\Agama $model */

$this->title = 'Tambah Agama';
$this->params['breadcrumbs'][] = ['label' => 'Agama', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>