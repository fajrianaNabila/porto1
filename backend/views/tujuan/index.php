<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Tujuan; //tambahkan

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TujuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tujuans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tujuan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tujuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'isi:ntext',
            'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tujuan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
