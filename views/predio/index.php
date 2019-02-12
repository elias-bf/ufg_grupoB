<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Prédios';
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
                'attribute' => 'unidade_administrativa_nome',
                'value' => function($model)
                {
                    return $model->unidadeAdministrativa->nome;
                }
            ],
            'endereco:ntext',
            'numero'
        ],
    ]); ?>
</div>
