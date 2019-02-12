<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>

<div class="form-body">
    
    <?php $form = ActiveForm::begin([
        'class' => 'col-form',
    ]); ?>
    
        <div class="col-logo">

            <a href="/">

                <img alt="" src="/logo.png">

            </a>

        </div>

        <fieldset>

            <?= $form->field($model, 'username', 
            [
                'template' => "<section><div class=\"form-group has-feedback\">{label} {input} <span class=\"fa fa-user form-control-feedback\" aria-hidden=\"true\"></span></div>\n<div>{error}</div></section>"
            ])->textInput() ?>

            <?= $form->field($model, 'password', [
                'template' => "<section><div class=\"form-group has-feedback\">{label} {input} <span class=\"fa fa-lock form-control-feedback\" aria-hidden=\"true\"></span></div>\n<div>{error}</div></section>"
            ])->passwordInput() ?>
            
        </fieldset>

        <footer class="text-right">

            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button', 'style' => 'width: 100%;']) ?>

        </footer>
   
    <?php ActiveForm::end(); ?>
      
</div>