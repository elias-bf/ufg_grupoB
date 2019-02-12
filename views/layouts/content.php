<?php

use yii\widgets\Breadcrumbs;

?>

<div class="content-wrapper">

    <section class="content-header">
        
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
                
    </section>
    
    <section class="content container-fluid">
        
        <?= $content ?>
        
    </section>

</div>