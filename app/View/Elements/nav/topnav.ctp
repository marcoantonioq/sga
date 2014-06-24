<div class="navbar navbar-fixed-top">
  <div class="navbar-inner top-nav">
    <div class="container-fluid">
      <div class="branding">
        <div class="logo"> 
          <?php echo $this->Html->link('HOME', '/'); ?>
          <!-- <?php echo $this->Html->image('logo.png', array(
            'url'=>'/'
          )) ?> -->
        </div>
      </div>
      <ul class="nav pull-right">
        <li class="dropdown search-responsive"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="nav-icon magnifying_glass"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li class="top-search">
              <form action="#" method="get">
                <div class="input-prepend"> <span class="add-on"><i class="icon-search"></i></span>
                  <input type="text" id="searchIcon">
                </div>
              </form>
            </li>
          </ul>
        </li>
       <!-- 
       <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="lang-icons"><img src="img/flag-icons/us.png" width="16" height="11" alt="language"></i><b class="caret"></b></a>
         <ul class="dropdown-menu">
           <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/gb.png" width="16" height="11" alt="language"></i> English UK</a></li>
           <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/fr.png" width="16" height="11" alt="language"></i> French</a></li>
           <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/sa.png" width="16" height="11" alt="language"></i> Arabic</a></li>
           <li><a href="#"><i class="lang-icons"><img src="img/flag-icons/it.png" width="16" height="11" alt="language"></i> Italian</a></li>
         </ul>
       </li> 
        -->
        
        <li class="dropdown">
          <?php echo $this->Link->dropdown(
            'Marco<span class="alert-noty">30</span>',
            'white-icons admin_user'
          ); ?>
          <ul class="dropdown-menu">
            <li>
              <?php echo $this->Link->icon(
                'Caixa de entrada<span class="alert-noty">15</span>', 
                'icon-inbox',
                array(
                  'controller'=>'users',
                  'action'=>'view', 1
                )
              ); ?>
            </li>
            <li>
              <?php echo $this->Link->icon(
                'Notificações<span class="alert-noty">15</span>', 
                'icon-envelope',
                array(
                  'controller'=>'users',
                  'action'=>'view', 1
                )
              ); ?>
            </li>
            <li>
              <?php echo $this->Link->icon(
                'Minha conta', 
                'icon-file',
                array(
                  'controller'=>'users',
                  'action'=>'view', 1
                )
              ); ?>
            </li>
            <li>
              <?php echo $this->Link->icon(
                'Editar conta', 
                'icon-pencil',
                array(
                  'controller'=>'users',
                  'action'=>'edit', 1
                )
              ); ?>
            </li>
            <li>
              <?php echo $this->Link->icon(
                'Minha conta', 
                'icon-cog',
                array(
                  'controller'=>'users',
                  'action'=>'settings', 1
                )
              ); ?>
            </li>
            <li class="divider"></li>
            <li>
              <strong>
                <?php echo $this->Link->icon(
                'Sair',
                'icon-off',
                array(
                  'controller'=>'users',
                  'action'=>'logout'
                )
              ); ?>
              </strong>
            </li>
          </ul>
        </li>
      </ul>

      <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <?php echo $this->Link->dropdown('Fazendas', 'nav-icon tree'); ?>
            <ul class="dropdown-menu">
              <li>
                <?php echo $this -> Html -> link("Listar Fazendas", 
                  array('controller' => 'fazendas', 'action' => 'index')
                ); ?>
              </li>
              <li><?php echo $this -> Html -> link("Cadastro", array('controller' => 'fazendas', 'action' => 'index')); ?>
              </li>
              <li><?php echo $this -> Html -> link("Pastos", array('controller' => 'pastos' , 'action' => 'index')); ?>
              </li>

              <li class=" divider"></li>
              <li class=" nav-header">Retiros</li>
              
              <li><?php echo $this -> Html -> link("Retiros", array('controller' => 'retiros' , 'action' => 'index')); ?>
              </li>

              <li class=" divider"></li>
              <li class=" nav-header">Contas</li>              

              <li>
                <?php echo $this -> Html -> link("contas", array('controller' => 'contas' , 'action' => 'index')); ?>
              </li>

              <li class=" divider"></li>
              <li class=" nav-header">Estatiscas</li>
              <li><?php echo $this -> Html -> link("Central Custo", '/'); ?></li>
            </ul>
          </li>

          <li class="dropdown">
            <?php echo $this->Link->dropdown('Cadastros', 'nav-icon pencil'); ?>
            <ul class="dropdown-menu">
              
              <li class=" divider"></li>
              <li class=" nav-header">Animais</li> 
                <li>
                  <?php echo $this -> Html -> link(
                    "Doenças", 
                    array('controller' => 'Animais' , 'action' => 'index')
                  ); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link("Sêmen", 
                    array('controller' => 'fazendas', 'action' => 'index')
                  ); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link(
                      "Pelagens", 
                      array('controller' => 'contas' , 'action' => 'index') 
                  );?>
                </li>
                <li>
                  <?php echo $this -> Html -> link(
                    "Raças", 
                    array('controller' => 'pastos' , 'action' => 'index')
                  ); ?>
                </li>
                
              <li class=" divider"></li>
              <li class=" nav-header">Datas</li>
              
                <li>
                  <?php echo $this -> Html -> link(
                    "Calendário", 
                    array('controller' => 'retiros' , 'action' => 'index')
                  ); ?>
                </li>
                
              <li class=" divider"></li>
              <li class=" nav-header">Fazenda</li>            

                <li>
                  <?php echo $this -> Html -> link(
                    "Embrião", 
                    array('controller' => 'fazendas', 'action' => 'index')
                  ); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link("Fornecedores", array('controller' => 'contas' , 'action' => 'index')); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link("Fabricantes", array('controller' => 'contas' , 'action' => 'index')); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link(
                    "Funcionário", 
                    array('controller' => 'pessoas' , 'action' => 'index')
                  ); ?>
                </li>
                <li>
                  <?php echo $this -> Html -> link("Contas", array('controller' => 'contas' , 'action' => 'index')); ?>
                </li>

              <li class=" divider"></li>
              <li class=" nav-header">Estatiscas</li>
              <li><?php echo $this -> Html -> link("Patrimônios", '/'); ?></li>
            </ul>
          </li> 


          <li class="dropdown">
            <?php echo $this->Link->dropdown('Lançamentos', 'nav-icon shuffle'); ?>
            <ul class="dropdown-menu">

              
              <li class=" divider"></li>
              <li class=" nav-header">Patrimonio</li>

              <li><?php echo $this -> Html -> link(
                "Categoria", 
                array(
                  'controller' => 'categoriaps',
                  'action' => 'index'
                )
              ); ?></li>
              <li><?php echo $this -> Html -> link(
                "Pipos", 
                array(
                  'controller' => 'patrimoniots',
                  'action' => 'index'
                )
              ); ?></li>  
              <li><?php echo $this -> Html -> link(
                "fabricantes", 
                array(
                  'controller' => 'fabricantes',
                  'action' => 'index'
                )
              ); ?></li>
              <li><?php echo $this -> Html -> link(
                "Medicamento", 
                array(
                  'controller' => 'medicamentos',
                  'action' => 'index'
                )
              ); ?></li>
              <li><?php echo $this -> Html -> link(
                "Ordenha", 
                array(
                  'controller' => 'ordenhaseletricas',
                  'action' => 'index'
                )
              ); ?></li>
            </ul>
          </li>
      



          <li class="dropdown">
            <?php echo $this->Link->dropdown('Configurações', 'nav-icon cog_3'); ?>
            <ul class="dropdown-menu">
              <li class="nav-header">Colors</li>
              <li class=" clearfix color-block"><span class="theme-color theme-blue" title="theme-blue"></span><span class="theme-color theme-light-blue" title="theme-light-blue"></span><span class="theme-color theme-dark" title="theme-dark"></span><span class="theme-color theme-chrome" title="theme-chrome"></span><span class="theme-color theme-chayam" title="theme-chayam"></span><span class="theme-color theme-default" title="theme-default"></span></li>
              <li class=" divider hidden-phone hidden-tablet"></li>
              <li class="nav-header hidden-phone hidden-tablet">Sidebar</li>
              <li class="theme-settings clearfix hidden-phone hidden-tablet">
                <div class="btn-group">
                  <button id="sidebar-on" disabled="disabled" class="btn btn-success">On</button>
                  <button id="sidebar-off" class="btn btn-inverse">Off</button>
                </div>
              </li>
              <li class=" divider"></li>
              <li class="nav-header hidden-phone hidden-tablet">Sidebar Placement</li>
              <li class="theme-settings clearfix hidden-phone hidden-tablet">
                <div class="btn-group">
                  <button disabled="disabled" id="left-sidebar" class="btn btn-inverse">Left</button>
                  <button id="right-sidebar" class="btn btn-info">Right</button>
                </div>
              </li>
              <li class="nav-header">Layout</li>
              
              <li><a href="../fixed-layout/index.html">Fixed Layout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>