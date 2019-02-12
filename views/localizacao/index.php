<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Localizações';
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
            'cep',
            'bairro',
            'cidade',
            'estado',
            'pais'
        ],
    ]); ?>
</div>
