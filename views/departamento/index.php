<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Departamentos';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => 
        [
            'nome',
            [
                'attribute' => 'sala_numero',
                'value' => function($model)
                {
                    return $model->sala->numero;
                }
            ]
        ],
    ]); ?>
</div>
