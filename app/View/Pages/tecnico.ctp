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
                        array('title'=>'Rebanho')
                        // "<span class='notification'>2</span>"
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

                <?php 
                    $eventos_count = $this->requestAction("Eventos/count_status/Aberto");
                ?>

                <li>
                    <?php echo $this->Link->atalho(
                        "/img/icones/animais-pesagem-histo.png",
                        "<span class='txt'>Ocorrências</span>", 
                        array('controller'=>'eventos'),
                        array('title'=>'Ocorrências / Eventos'),
                        "<span class='notification'>$eventos_count</span>"
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