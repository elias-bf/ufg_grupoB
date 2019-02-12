<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Ordens de Serviços', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="pull-right">
        
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-default']) ?>
        
        <?php if($model->status == '1') : ?>
        
            <?= Html::a('Concluir OS', ['concluir', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        
        <?php endif; ?>
        
    </p>

    <?php if($model->status == '1') : ?>
    
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => 
            [
                'numero',
                [
                    'attribute' => 'patrimonio_id',
                    'value' => $model->patrimonio->nome
                ],
                [
                    'attribute' => 'status',
                    'value' => 'Pendente'
                ],
                'status',
                'motivo:ntext',
                'nome_prestadora:ntext'
            ],
        ]) ?>
    
    <?php else: ?>
    
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => 
            [
                'numero',
                [
                    'attribute' => 'patrimonio_id',
                    'value' => $model->patrimonio->nome
                ],
                [
                    'attribute' => 'status',
                    'value' => 'Concluída'
                ],
                'status',
                'motivo:ntext',
                'nome_prestadora:ntext',
                [
                    'attribute' => 'data_devolucao',
                    'value' => Yii::$app->formatter->asDate($model->data_devolucao, 'dd/MM/Y') 
                ],
                [
                    'attribute' => 'preco',
                    'value' => ($model->preco) ? 'R$ ' . number_format($model->preco, 2, ',', '.') : 'R$ 0,00'
                ],
            ],
        ]) ?>
        
    <?php endif; ?>

</div>
