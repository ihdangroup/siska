<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var siska\models\JenjangPendidikan $model */

$this->title = 'Create Jenjang Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Jenjang Pendidikans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenjang-pendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
