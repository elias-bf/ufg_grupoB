<?php

use yii\helpers\Html;

$this->title = 'Edição de Ordem de Serviço: ' . $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Ordens de Serviço', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numero, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edição';
?>
<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
