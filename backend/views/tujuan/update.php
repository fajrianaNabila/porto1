<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tujuan */

$this->title = 'Update Tujuan: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tujuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tujuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
