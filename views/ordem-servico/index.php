<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Ordens de Serviços';
$this->params['breadcrumbs'][] = $this->title;

$status = ['1' => "Pendente", "2" => "Concluída"];

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="pull-right">
        <?= Html::a('Inserir', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => 
        [
            'numero',
            [
                'attribute' => 'patrimonio_nome',
                'value' => function($model)
                {
                    return $model->patrimonio->nome;
                }
            ],
            [
                'attribute' => 'status',
                'filter' => $status,
                'format' => 'raw',
                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center'],
                'value' => function($model) use ($status)
                {
                    $text = isset($status[$model->status]) ? $status[$model->status] : '';
                    $style = ($model->status == '1') ? 'background: yellow;' : 'background: green;';
                    
                    return "<span class='badge' style='{$style}'>{$text}</span>";
                }
            ],
            'motivo:ntext',
            [
                'class' => 'yii\grid\ActionColumn',
                'visibleButtons' => 
                [
                    'update' => function ($model)
                    {
                        return ($model->status == '1');
                    },
                    'delete' => function ($model) 
                    {
                        return ($model->status == '1');
                    },
                ]
            ],
        ],
    ]); ?>
</div>
