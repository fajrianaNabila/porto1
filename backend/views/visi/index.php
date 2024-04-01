<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Visi; //tambahkan

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VisiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentang Saya';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tentang Saya', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Visi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
