<?php

use siska\models\JenjangPendidikan;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\grid\ActionColumn;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var siska\models\JenjangPendidikanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Jenjang Pendidikans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenjang-pendidikan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Jenjang Pendidikan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenjang',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, JenjangPendidikan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>