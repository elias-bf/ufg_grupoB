<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\BemPatrimonial;
use yii\helpers\ArrayHelper;

?>

<div class="ordem-servico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'numero')->textInput() ?>

    <?= $form->field($model, 'patrimonio_id')
        ->dropDownList(
            ArrayHelper::map(BemPatrimonial::find()->orderBy('nome ASC')->all(), 'id', 'nome'),
            ['prompt' => '']
        ); ?>

    <?= $form->field($model, 'motivo')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'nome_prestadora')->textInput() ?>
    
    <div class="form-group pull-right">
        <?= Html::a('Cancelar', ['index'], ['class' => 'btn btn-default']) ?>
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
