<?php //$this->Html->addCrumb( 'Dashboard', array('action'=> 'index')); ?>
<?php //$this->Html->addCrumb( 'Index', array('action'=> 'index')); ?>
<?php //$this->assign('title','Home page'); ?>
<?php 
    if(!empty($this->request->params['prefix'])){
        $this->Html->addCrumb($title_for_layout, array($this->request->params['prefix']=>true, 'controller'=>'pages', 'action'=>'home')); 
    }
 ?>

<?php $user = $this->Session->read('Auth.User'); ?>
<?php $fazenda = $this->Session->read('Auth.Fazenda');  ?>
<div class="row-fluid">
    <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">

            <div class="nav-no-collapse">
                <ul class="nav">
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-cog"></span> Settings
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                        
                            <li class="menu">
                                <ul>
                                    <li>                                                    
                                        <a href="#"><span class="icon16 icomoon-icon-equalizer"></span>Site config</a>
                                    </li>
                                    <li>                                                    
                                        <a href="#"><span class="icon16 icomoon-icon-wrench"></span>Plugins</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon16 icomoon-icon-picture-2"></span>Themes</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="icon16 icomoon-icon-bell-2 nofloat"></span><span class="notification">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul class="notif">
                                    <li class="header"><strong>Notificações</strong> (1) items</li>
                                    <li>
                                        <a href="#">
                                            <span class="icon"><span class="icon16 icomoon-icon-user-3"></span></span>
                                            <span class="event">1 usuário registrado</span>
                                        </a>
                                    </li>
                                    <li class="view-all">
                                        <a href="#">Ver todas notificações
                                            <span class="icon16 icomoon-icon-arrow-right-8"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <?php echo $this->Html->image(
                                '/images/avatar.jpg', 
                                array(
                                    "class"=>"image",
                                    'width'=>'32px',
                                    'height'=>'32px'
                                )
                            );?>
                            <span class="txt"><?= $user['email'] ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li>
                                        <?php echo $this->Link->icon('Editar perfil',
                                            'icon16 icomoon-icon-user-3',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'edit',
                                                $user['id']
                                            )
                                        ) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Link->icon('Mensagens',
                                            'icon16 icomoon-icon-comments-2',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'message'
                                            )
                                        ) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Link->icon('Novo usuário',
                                            'icon16 icomoon-icon-plus-2',
                                            array(
                                                'controller'=>'users',
                                                'action'=>'add'
                                            )
                                        ) ?>
                                    </li>
                                    <li>
                                        <?php echo $this->Link->icon('Logout', 
                                            'icon16 icomoon-icon-exit',
                                            array(
                                                'controller' => 'users', 
                                                'action' => 'logout'
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php if(!empty($fazenda)): ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                            <?php echo $this->Html->image(
                                "/img/icones/fazendas.png", 
                                array(
                                    "class"=>"image",
                                    'width'=>'32px',
                                    'height'=>'32px'
                                )
                            );?>
                            <span class="txt"><?= $fazenda['nome'] ?></span>
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="menu">
                                <ul>
                                    <li>
                                        <?php echo $this->Link->icon('Editar perfil',
                                            'icon16 icomoon-icon-user-3',
                                            array(
                                                'controller'=>'fazendas',
                                                'action'=>'edit',
                                                $fazenda['id']
                                            )
                                        ) ?>
                                    </li>
                                     <li>
                                        <?php echo $this->Link->icon('Logout', 
                                            'icon16 icomoon-icon-exit',
                                            array(
                                                'controller' => 'fazendas', 
                                                'action' => 'login'
                                            )
                                        ); ?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.nav-collapse -->
          </div>
        </div><!-- /navbar-inner -->
      </div><!-- /navbar -->
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="centerContent">

            <ul class="bigBtnIcon">
                
                <li>
                    <a href="#" title="Usuários" class="tipB">
                        <span class="icon icomoon-icon-users"></span>
                        <span class="txt">Usuários</span>
                        <span class="notification">5</span>
                    </a>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/fazendas.png",
                        'Fazendas', 
                        array('controller'=>'fazendas'),
                        array('title'=>'Fazendas')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/retiros.png",
                        'Retiros', 
                        array('controller'=>'retiros'),
                        array('title'=>'Retiros')
                    ); ?>
                </li>
                
                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/pastos.png",
                        'Pastos', 
                        array('controller'=>'pastos'),
                        array('title'=>'Pastos')
                    ); ?>
                </li>

                 <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/rebanho.png",
                        "<span class='txt'>Rebanho</span>", 
                        array('controller'=>'bovinos'),
                        array('title'=>'Rebanho'),
                        "<span class='notification'>2</span>"
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/animais-mov.png",
                        'Animais', 
                        array('controller'=>'movbovinos', 'action'=>'add'),
                        array('title'=>'Movimentação de animais')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/animais-morto.png",
                        'Doenças',
                        array('controller'=>'doencas'),
                        array('title'=>'Doenças')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/animais-pesagem.png",
                        'Pesagem', 
                        array('controller'=>'pesagens', 'action'=>'add'),
                        array('title'=>'Pesagem de animais')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/animais-pesagem-histo.png",
                        'Ocorrencias',
                        array('controller'=>'eventos', 'action'=>'index'),
                        array('title'=>'Ocorrências / Eventos')
                    ); ?>
                </li>
                

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/leite-pesagem.png",
                        'Pesagem', 
                        array('controller'=>'leitepesagens', 'action'=>'add'),
                        array('title'=>'Pesagem leite')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/leite-pesagem-hist.png",
                        'Historico', 
                        array('controller'=>'leitepesagens'),
                        array('title'=>'Historico leite pesagem')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/leite-fornecimento.png",
                        'Fornecimento', 
                        array('controller'=>'fornecimentos'),
                        array('title'=>'Fornecimento leite')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/sacagem-vacas.png",
                        'Secagem',
                        array('controller'=>'eventos', 'action'=>'secagem'),
                        array('title'=>'Secagem vacas')
                    ); ?>
                </li>
                
                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/mamite-clinica.png",
                        'Mamite',
                        array('controller'=>'eventos', 'action'=>'mamite-clinica'),
                        array('title'=>'Mamite clinica')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/calendario-sanitario.png",
                        'Calendário',
                        array('controller'=>'calendarios'),
                        array('title'=>'Calendario sanitario')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/aplicacao-medicamento.png",
                        'Medicamento',
                        array('controller'=>'medicamentos_bovinos'),
                        array('title'=>'Medicamento')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/novilhas-aptas.png",
                        'Novilhas aptas', 
                        array('controller'=>'bovinos', 'action'=>'aptas'),
                        array('title'=>'Novilhas aptas')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/ocorrencias.png",
                        'Ocorrencias', 
                        array('controller'=>'eventos'),
                        array('title'=>'Ocorrencias')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/inseminacao.png",
                        'Inseminacões', 
                        array('controller'=>'ics'),
                        array('title'=>'Inseminacao')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/diagnostico.png",
                        'Diagnosticos',
                        array('controller'=>'eventos_doencas'),
                        array('title'=>'Diagnosticos')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/parto.png",
                        'Partos',
                        array('controller'=>'ics', 'partos'),
                        array('title'=>'Mamite clinica')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/historico-reprodutivo.png",
                        'Reprodutivo', 
                        array('controller'=>'ics', 'action'=>'historico'),
                        array('title'=>'Historico reprodutivo')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/dietas.png",
                        'Dietas',
                        array('controller'=>'dietas'),
                        array('title'=>'Dietas')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/ingredientes.png",
                        'ingredientes', 
                        array('controller'=>'ingredientes'),
                        array('title'=>'Ingredientes')
                    ); ?>
                </li>

                <hr>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/clientes.png",
                        'Clientes', 
                        array('controller'=>'clientes'),
                        array('title'=>'Clientes')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/fornecedores.png",
                        'forncedores', 
                        array('controller'=>'forncedores'),
                        array('title'=>'forncedores')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/benfeiturias.png",
                        'Benfeiturias', 
                        array('controller'=>'patrimonios'),
                        array('title'=>'Benfeiturias/Patrimonio')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/maquinas.png",
                        'Ordenhas', 
                        array('controller'=>'ordenhas'),
                        array('title'=>'Ordenhas')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/outros.png",
                        'Outros', 
                        array('controller'=>'outros'),
                        array('title'=>'Outros')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/terra.png",
                        'Terra', 
                        array('controller'=>'terra'),
                        array('title'=>'Terra')
                    ); ?>
                </li>  

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/centro_custos.png",
                        'Centro', 
                        array('controller'=>'centralcustos'),
                        array('title'=>'Centro de custos')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/compras.png",
                        'Compras', 
                        array('controller'=>'compras'),
                        array('title'=>'Compras')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/pagamentos.png",
                        'Pagamentos', 
                        array('controller'=>'pagamentos'),
                        array('title'=>'pagamentos')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/pagamentos_hist.png",
                        'Historico', 
                        array('controller'=>'pagamentos_hist'),
                        array('title'=>'Historico pagamentos')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/vendas.png",
                        'Vendas', 
                        array('controller'=>'vendas'),
                        array('title'=>'Vendas')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/vendas_hist.png",
                        'Vendas', 
                        array('controller'=>'vendas'),
                        array('title'=>'Vendas')
                    ); ?>
                </li>  

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/recebimentos.png",
                        'Recebimentos', 
                        array('controller'=>'recebimentos'),
                        array('title'=>'Recebimentos')
                    ); ?>
                </li>  

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/recebimentos_hist.png",
                        'Recebimentos', 
                        array('controller'=>'recebimentos'),
                        array('title'=>'Recebimentos Historico')
                    ); ?>
                </li>  

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/mov_bancarios.png",
                        'Movimentos', 
                        array('controller'=>'mov_bancarios'),
                        array('title'=>'Movimentos Bancários')
                    ); ?>
                </li>

                <hr>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/tempo.png",
                        'Tempo', 
                        array('controller'=>'tempo'),
                        array('title'=>'Clima, Tempo')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/opcoes.png",
                        'opções', 
                        array('controller'=>'opcoes'),
                        array('title'=>'Opçoes')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/backup.png",
                        'Backup', 
                        array('controller'=>'backup'),
                        array('title'=>'Backup do sistema')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/sair.png",
                        'sair', 
                        array('controller'=>'users', 'action'=>'logout'),
                        array('title'=>'Sair do sistema')
                    ); ?>
                </li>   

                <hr>     

                <?php echo $this->element('user/atalhos-user'); ?>
                
            </ul>
        </div>
    </div><!-- End atalhos -->

    <!--
    <div class="span4">
        <div class="centerContent">
            <div dir="ltr" class="circle-stats">
                
                <div class="circular-item tipB" title="Site overload">
                    <span class="icon icomoon-icon-fire"></span>
                    <input type="text" value="62" class="redCircle" />
                </div>

                <div class="circular-item tipB" title="Site average load time">
                    <span class="icon icomoon-icon-busy"></span>
                    <input type="text" value="12" class="blueCircle" />
                </div>

                <div class="circular-item tipB" title="Target complete">
                    <span class="icon icomoon-icon-target-2"></span>
                    <input type="text" value="94" class="greenCircle" />
                </div>

            </div>
        </div>

    </div>
    -->
</div>



<?php //echo $this->element('widget/widget'); ?>
<?php //echo $this->element('widget/widget-menu'); ?>
<?php //echo $this->element('widget/widget-estatisca'); ?>
<?php //echo $this->element('widget/widget-chart1'); ?>
<?php //echo $this->element('widget/widget-chart2'); ?>
<?php //echo $this->element('widget/calendario'); ?>
<?php //echo $this->element('widget/widget-chart'); ?>