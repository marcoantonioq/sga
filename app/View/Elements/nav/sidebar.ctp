<!--Responsive navigation button-->  
<div class="resBtn">
    <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
</div>

<!--Left Sidebar collapse button-->  
<div class="collapseBtn rightbar">
     <a href="#" class="tipR" title="Ocultar Sidebar Esquerda"><span class="icon12 minia-icon-layout"></span></a>
</div>

<!--Sidebar background-->
<div id="sidebarbg-right"></div>
<!--Sidebar content-->
<div id="sidebar-right">

    <?php echo $this->element('nav/atalhos'); ?>            

    <div class="sidenav">

        <div class="sidebar-widget" style="margin: -1px 0 0 0;">
            <h5 class="title" style="margin-bottom:0">Navegação</h5>
        </div><!-- End .sidenav-widget -->

        <div class="mainnav">
            <ul>
                <li>
                    <?php echo $this->Link->icon('Dashboard', 
                        'icon16 icomoon-icon-screen-2',
                        '/'
                    ); ?>
                </li>
                
                <li>
                    <?php echo $this->Link->icon('Recursos Humanos','icomoon-icon-users'); ?>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Link->icon('Pessoas',
                                'icon16 icomoon-icon-users',
                                array('controller'=>'pessoas','action'=>'index')
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Link->icon('Usuários',
                                'icon16 icomoon-icon-user',
                                array('controller'=>'users','action'=>'index')
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Link->icon('Cargos',
                                'icon16',
                                array('controller'=>'cargos','action'=>'index')
                            ); ?>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <?php echo $this->Link->icon('Fazenda','icomoon-icon-tree'); ?>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link("Fazendas", array(
                                'controller' => 'fazendas', 
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Retiros", array(
                                'controller' => 'retiros' , 
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Pastos", array(
                                'controller' => 'pastos' , 
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Contas", array(
                                'controller' => 'accounts' , 
                                'action' => 'index'
                            )); ?>
                        </li>
                    </ul>
                </li>
            
                <li>
                    <?php echo $this->Link->icon('Cadastro','icomoon-icon-address'); ?>
                    <ul class="sub" >
                        <li>
                            <?php echo $this->Html->link("Sêmens", array(
                                'controller' => 'semems', 
                                'action' => 'index'
                            )); ?>
                        </li>

                        <li>
                            <?php echo $this->Html->link("Inseminação", array(
                                'controller' => 'ics', 
                                'action' => 'index'
                            )); ?>
                        </li>

                        <li>
                            <?php echo $this->Html->link("Doenças", array(
                                'controller' => 'doencas', 
                                'action' => 'index'
                            )); ?>
                        </li>

                        <hr>

                        <li>
                            <?php echo $this->Html->link("Raças", array(
                                'controller' => 'racas', 
                                'action' => 'index'
                            )); ?>
                        </li>

                        <li style="border-top: 1px solid rgb(162, 162, 162)">
                            <?php echo $this->Html->link("Calendário", '/calendarios'); ?>
                        </li>
                        
                        <li>
                            <?php echo $this->Html->link("Pelagens", '/pelagens'); ?></li>
                        <li><?php echo $this->Html->link(
                                    "Medicamento", 
                                    array(
                                        'controller' => 'medicamentos',
                                        'action' => 'index'
                                    )
                                ); ?>
                        </li>
                       
                        <li style="border-top: 1px solid rgb(162, 162, 162)">
                            <?php echo $this->Html->link("Patrimônios", array(
                                'controller' => 'patrimonios', 
                                'action' => 'index'
                            )); ?>
                        </li>
                       
                        <li>
                            <?php echo $this->Html->link(
                                "Ordenha", 
                                array(
                                    'controller' => 'ordenhas',
                                    'action' => 'index'
                                )
                            ); ?>
                        </li>
                        

                        <li >
                            <a href="#">Clientes</a>
                            <ul class="sub">
                                <li>
                                    <?php echo $this->Html->link("Clientes", array(
                                        'controller' => 'clientes', 
                                        'action' => 'index'
                                    )); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link(
                                    'ClientesFazendas', 
                                    array(
                                        'controller' => 'clientes_fazendas', 
                                        'action' => 'index'
                                    )); ?>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Fornecedores", array(
                                'controller' => 'fornecedores', 
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Fabricantes", array(
                                'controller' => 'fabricantes', 
                                'action' => 'index'
                            )); ?>
                        </li>
                    </ul>
                </li>
        
                <li>
                    <?php echo $this->Link->icon('Rebanho','cut-icon-plus'); ?>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link("Controle raças", array(
                                'controller' => 'bovinos_racas', 
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Animais", array(
                                'controller' => 'bovinos', 
                                'action' => 'index'
                            )); ?>
                        </li>
                        
                        <li>
                            <?php echo $this->Html->link(
                                "Ocorrências", 
                                array(
                                    'controller' => 'eventos',
                                    'action' => 'index'
                                )
                            ); ?>
                        </li>                       
                        <li>
                            <?php echo $this->Html->link(
                                "Diagnóstico", 
                                array(
                                    'controller' => 'eventos_doencas',
                                    'action' => 'index'
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                "Pesagens de leite ", 
                                array(
                                    'controller' => 'leitepesagens', 'action' => 'index'
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                "Pesagens de animais", 
                                array(
                                    'controller' => 'leitepesagens', 'action' => 'index'
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                "Gestantes / Partos", 
                                array(
                                    'controller' => 'ics',
                                    'action' => 'index', 'partos' 
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                "Inseminação", 
                                array(
                                    'controller' => 'ics', 
                                    'action' => 'index', 'ics'
                                )
                            ); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                "Movimentação", 
                                array(
                                    'controller' => 'movbovinos', 
                                    'action' => 'add'
                                )
                            ); ?>
                        </li>
                    </ul>
                </li>            
            
                <li>
                    <?php echo $this->Link->icon('Lançamentos','cut-icon-plus'); ?>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link("Compras", array(
                                'controller' => 'compras',
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Vendas", array(
                                'controller' => 'vendas',
                                'action' => 'index'
                            )); ?>
                        </li>

                        <li>
                            <?php echo $this->Html->link("Pagamentos", array(
                                'controller' => 'pagamentos',
                                'action' => 'index'
                            )); ?>
                        </li>
                        <hr>
                        <li>
                            <?php echo $this->Html->link("Despesas", array(
                                'controller' => 'custos',
                                'action' => 'index'
                            )); ?>
                        </li>
                        
                        <li>
                            <?php echo $this->Html->link("Produtos", array(
                                'controller' => 'produtos',
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Fornecimentos", array(
                                'controller' => 'fornecimentos',
                                'action' => 'index'
                            )); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Central de custos", array(
                                'controller' => 'centralcustos',
                                'action' => 'index'
                            )); ?>
                        </li>
                    </ul>
                </li>            
                
                <!-- 
                <li>
                    <?php echo $this->Html->link("Históricos", '/histoticos'); ?>
                </li>
                            
                <li>
                    <?php echo $this->Html->link("Nutrição", '/nutricoes'); ?>
                </li>
                            
                <li>
                    <?php echo $this->Html->link("Relatórios", '/relatorios'); ?>
                </li> -->
            
                <li>
                    
                    <?php echo $this->Link->icon('Ferramentas','icomoon-icon-tools'); ?>
                    <ul class="sub">
                        <li>
                            <?php echo $this->Html->link("Categoria Os", "#"); ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link("Papéis", "#"); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <?php 
                    echo $this->Html->link(
                        "<span class='icon16 icomoon-icon-help'></span>Ajuda",
                        array('controller'=>'help', 'action'=>'send'),
                        array('escape'=>false)
                    );

                     ?>
                </li>
            </ul>
        </div>
    </div><!-- End sidenav -->
</div><!-- End #sidebar -->