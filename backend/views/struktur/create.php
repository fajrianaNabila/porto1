<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Struktur */

$this->title = 'Create Project';
$this->params['breadcrumbs'][] = ['label' => 'Strukturs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="struktur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
