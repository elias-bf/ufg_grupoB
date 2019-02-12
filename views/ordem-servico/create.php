<?php

use yii\helpers\Html;

$this->title = 'Nova Ordem de Serviço';
$this->params['breadcrumbs'][] = ['label' => 'Ordens de Serviços', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
