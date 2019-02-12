<?php

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\LoginAsset;

LoginAsset::register($this);

?>

<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

        <head>
            
            <meta charset="<?= Yii::$app->charset ?>">
            
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            
            <?= Html::csrfMetaTags() ?>
            
            <title>InvSCP - <?= Html::encode($this->title) ?></title>
            
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

            <?php $this->head() ?>
            
            <style>
                
                .form-body 
                {
                    background-color: #FFF !important;
                    margin-top: 10%;
                    padding-bottom: 20px;
                }
                
                .col-logo 
                {
                    background: #FFF !important;
                    border-bottom: 1px solid #cbcbcb;
                    margin-bottom: 10px;
                }
                
                footer
                {
                    padding-top: 20px;
                    border-top: 1px solid #cacaca;
                }
                
            </style>
        
        </head>

        <body class="body-bg-color">

            <?php $this->beginBody() ?>

                <div class="wrapper">

                    <?= Alert::widget() ?>

                    <?= $content ?>

                </div>

            <?php $this->endBody() ?>

        </body>

    </html>

<?php $this->endPage() ?>
