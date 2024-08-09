<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\JenjangPendidikan $model */

$this->title = 'Update Jenjang Pendidikan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenjang Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenjang-pendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
