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
            
            <li class="treeview"><a href="#"><i class="fa fa-check-square-o"></i> <span>Aceites</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          
                <ul class="treeview-menu ">
            
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Saída</a></li>
                
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Entrada</a></li>
          
                </ul>
        
            </li>
            
            <li> <a href="/ordem-servico"> <i class="fa fa-delicious"></i> <span>Ordens de Serviços</span></a> </li>
            
            <li class="treeview"><a href="#"><i class="fa fa-file-text-o"></i> <span>Cadastros</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          
                <ul class="treeview-menu ">
            
                    <li><a href="/bem-patrimonial"><i class="fa fa-angle-right"></i> Bens Patrimoniais</a></li>
                    
                    <li><a href="/departamento"><i class="fa fa-angle-right"></i> Departamentos</a></li>
                    
                    <li><a href="/sala"><i class="fa fa-angle-right"></i> Salas</a></li>
                    
                    <li><a href="/predio"><i class="fa fa-angle-right"></i> Prédios</a></li>
                    
                    <li><a href="/unidade-administrativa"><i class="fa fa-angle-right"></i> Unidades Administrativas</a></li>
                    
                    <li><a href="/localizacao"><i class="fa fa-angle-right"></i> Localizações</a></li>
                    
                    <li><a href="/grupo-material"><i class="fa fa-angle-right"></i> Grupos de Materiais</a></li>
                
                    <li><a href="/usuario"><i class="fa fa-angle-right"></i> Usuários</a></li>
          
                </ul>
        
            </li>
            
            <li class="treeview"><a href="#"><i class="fa fa-print"></i> <span>Relatórios</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
          
                <ul class="treeview-menu ">
            
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Inventário</a></li>
                    
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Bens Pat. da Seção</a></li>
                    
                    <li><a href="javascript:void(0)"><i class="fa fa-angle-right"></i> Dados do Bem Pat.</a></li>
                    
                </ul>
        
            </li>
            
            <li> <a href="/site/logout"> <i class="fa fa-power-off"></i> <span>Sair</span></a> </li>
                    
        </ul>

    </section>

</aside>