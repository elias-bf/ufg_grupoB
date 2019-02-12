<header class="main-header dark-bg"> 
    
    <a href="/" class="logo dark-bg"></a> 
    
    <nav class="navbar navbar-static-top" role="navigation"> 
    
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
      
        <div class="navbar-custom-menu">
        
            <ul class="nav navbar-nav">
          
                <li class="dropdown user user-menu"> 
                    
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                        
                        <img src="/template/dist/img/img1.jpg" class="user-image" alt="User Image"> 
                        
                        <span class="hidden-xs"><?= Yii::$app->user->identity->nome ?></span> 
                    
                    </a>
            
                    <ul class="dropdown-menu">
              
                        <li class="user-header">
                
                            <div class="pull-left user-img"><img src="/template/dist/img/img1.jpg" class="img-responsive" alt="User"></div>
                
                            <p class="text-left"><?= Yii::$app->user->identity->nome ?> <small><?= Yii::$app->user->identity->cargo ?></small> </p>
                            
                        </li>
                        
                        <li role="separator" class="divider"></li>
                            
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> Alterar Perfil</a></li>
    
                        <li role="separator" class="divider"></li>
              
                        <li><a href="/site/logout"><i class="fa fa-power-off"></i> Sair</a></li>
            
                    </ul>
          
                </li>
        
            </ul>
      
        </div>
    
    </nav>
  
</header>