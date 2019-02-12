<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

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
    
            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
            
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
            
            <?php $this->head() ?>

        </head>

        <body class="sidebar-mini">

            <?php $this->beginBody() ?>
                
                <div class="wrapper"> 

                    <?= $this->render('header.php'); ?>

                    <?= $this->render("left-" . Yii::$app->user->identity->cargo_codigo . ".php"); ?>

                    <div class="div-loading"></div>

                    <?= $this->render('content.php', ['content' => $content]); ?>

                </div>

            <?php $this->endBody() ?>

        </body>

    </html>

<?php $this->endPage() ?>
