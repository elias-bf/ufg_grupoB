<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Bens Patrimoniais';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => 
        [
            'numero_tombamento',
            'nome',
            [
                'attribute' => 'departamento_nome',
                'value' => function($model)
                {
                    return $model->departamento->nome;
                }
            ],
            [
                'attribute' => 'sala_numero',
                'value' => function($model)
                {
                    return $model->sala->numero;
                }
            ],
            [
                'attribute' => 'grupo_material_nome',
                'value' => function($model)
                {
                    return $model->grupoMaterial->nome;
                }
            ]
        ],
    ]); ?>
</div>
