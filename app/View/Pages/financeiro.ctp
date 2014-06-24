<?php //$this->Html->addCrumb( 'Dashboard', array('action'=> 'index')); ?>
<?php //$this->Html->addCrumb( 'Index', array('action'=> 'index')); ?>
<?php //$this->assign('title','Home page'); ?>
<?php 
    if(!empty($this->request->params['prefix'])){
        $this->Html->addCrumb($title_for_layout, array($this->request->params['prefix']=>true, 'controller'=>'pages', 'action'=>'home')); 
    }
 ?>

<?php $fazenda = $this->Session->read('Auth.Fazenda');  ?>
<?php echo $this->element('user/session-alerts'); ?>

<div class="row-fluid">
    <div class="span12">
        <div class="centerContent">

            <ul class="bigBtnIcon">
                
                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/clientes.png",
                        'Usuários', 
                        array('controller'=>'users'),
                        array('title'=>'Usuários')
                    ); ?>
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
                        "/img/icones/leite-fornecimento.png",
                        'Fornecimento', 
                        array('controller'=>'fornecimentos'),
                        array('title'=>'Fornecimento leite')
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
                        array('title'=>'fornecedores')
                    ); ?>
                </li>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/benfeiturias.png",
                        'Benfeiturias', 
                        array('controller'=>'patrimonios'),
                        array('title'=>'Benfeitorias/Patrimonio')
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

                <!-- <li>
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
                </li> --> 

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
                        array('controller'=>'pagamentos', 'action'=>'add'),
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
                        'Venda', 
                        array('controller'=>'vendas', 'action'=>'add'),
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

                <hr>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/tempo.png",
                        'Tempo', 
                        array('controller'=>'meteorologicos'),
                        array('title'=>'Clima, Tempo (meteorológicos)')
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

                <?php $atalhos = $this->requestAction('Atalhos/listUser'); ?>

                <?php foreach ($atalhos as $atalho): ?>
                <li>
                    <?php echo $this->Link->icon("<span class=\"txt\">{$atalho['Atalho']['title']}</span>",
                        $atalho['Atalho']['class'],
                        array(
                            'plugin'=>$atalho['Atalho']['plugin'],
                            'controller'=>$atalho['Atalho']['controller'],
                            'action'=>$atalho['Atalho']['action'],
                        )
                    );?>
                </li>
                <?php endforeach; ?>
                
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