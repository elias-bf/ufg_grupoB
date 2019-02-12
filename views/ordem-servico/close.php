<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\BemPatrimonial;
use yii\widgets\ActiveForm;
use kartik\money\MaskMoney;

$this->title = 'Conclusão de Ordem de Serviço: ' . $model->numero;
$this->params['breadcrumbs'][] = ['label' => 'Ordens de Serviço', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->numero, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Conclusão';

?>

<div class="card">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput(['disabled' => TRUE]) ?>

    <?= $form->field($model, 'patrimonio_id')
        ->dropDownList(
            ArrayHelper::map(BemPatrimonial::find()->orderBy('nome ASC')->all(), 'id', 'nome'),
            ['prompt' => '', 'disabled' => TRUE]
        ); ?>

    <?= $form->field($model, 'motivo')->textarea(['rows' => 3, 'disabled' => TRUE]) ?>

    <?= $form->field($model, 'nome_prestadora')->textInput(['disabled' => TRUE]) ?>

    <?= $form->field($model, 'data_devolucao')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'preco')->widget(MaskMoney::classname(), [
        'pluginOptions' => 
        [
            'prefix' => 'R$',
            'thousands' => '.',
            'decimal' => ',',
            'precision' => 2,
            'allowNegative' => false
        ]
    ]); ?>
    
    <div class="form-group pull-right">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
