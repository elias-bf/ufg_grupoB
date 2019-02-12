<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Grupo de Materiais';
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
        ],
    ]); ?>
</div>
