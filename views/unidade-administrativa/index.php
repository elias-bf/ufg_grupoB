<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Unidades Administrativas';
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
                'attribute' => 'localizacao_nome',
                'value' => function($model)
                {
                    return $model->localizacao->nome;
                }
            ]
        ],
    ]); ?>
</div>
