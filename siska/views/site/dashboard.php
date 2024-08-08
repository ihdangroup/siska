<?php
$this->title="Dashboard";
$this->params['breadcrumbs']=[['label'=> $this->title]]
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            Selamat Datang <strong><?= Yii::$app->user->identity->username; ?> </strong>
        </div>
    </div>
</div>