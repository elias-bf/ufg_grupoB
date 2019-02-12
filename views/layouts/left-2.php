<aside class="main-sidebar dark-bg">
    
    <section class="sidebar">
    
        <div class="user-panel black-bg">
        
            <div class="pull-left image"> <img src="/template/dist/img/img1.jpg" class="img-circle" alt="User Image"> </div>
        
            <div class="pull-left info">
          
                <p><?= Yii::$app->user->identity->nome ?></p>
          
                <a href="#">online</a> 
            
            </div>
      
        </div>

        <ul class="sidebar-menu" data-widget="tree">
        
            <li class="header dark-bg"><?= Yii::$app->user->identity->cargo ?></li>
        
            <li class="active"> <a href="/site"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>
            
            <li> <a href="javascript:void(0)"> <i class="fa fa-dollar"></i> <span>Bens Patrimoniais</span></a> </li>
            
            <li class="treeview"><a href="#"><i class="fa fa-print"></i> <span>Relatórios</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          
                <ul class="treeview-menu ">
            
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Inventário</a></li>
                    
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Bens Pat. da Seção</a></li>
                                        
                </ul>
        
            </li>
            
            <li> <a href="/site/logout"> <i class="fa fa-power-off"></i> <span>Sair</span></a> </li>
                    
        </ul>

    </section>

</aside>