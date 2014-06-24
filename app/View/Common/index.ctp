<?php 
    if(!empty($this->request->params['prefix'])){
        $this->Html->addCrumb($this->request->params['prefix'], array($this->request->params['prefix']=>true, 'controller'=>'pages', 'action'=>'home')); 
    }
    $this->Html->addCrumb(__($title_for_layout), array('action'=> 'index')); 
    foreach ($this->request->params['pass'] as $key => $value) {
        $this->Html->addCrumb( $value); 
    }
?>

<?php echo $this->Form->create('Actions'); ?>

<?php
    
    $total = array();

    $this->Form->inputDefaults(array(
        'label' => false,
        'class' => 'span12',
    ));

    echo $this->Form->input('chooser', array(
        'type' => 'hidden',
        'value' => isset($this->request->query['chooser']),
    ));
?>

<script>
    function bloquearCtrlJ(){   // Verificação das Teclas  
        var tecla=window.event.keyCode;   //Para controle da tecla pressionada  
        var ctrl=window.event.ctrlKey;    //Para controle da Tecla CTRL  

        if (ctrl && tecla==74){    //Evita teclar ctrl + j  
            event.keyCode=0;  
            event.returnValue=false;  
        }  
    }  
</script>

<div class="row-fluid">
    <div class="ocultar">
        <div class="span12 well">
            <div class="relatorio">
                Relatório <?= __($title_for_layout) ?>
                <div class="right"><?= date("d/m/Y H:i"); ?></div>
                <hr>
            </div>


            <?php
                for ($i=1; $i < 5; $i++) { 
                    echo $this->Form->hidden("Filter.filter.$i");
                    echo $this->Form->hidden("Filter.type.$i");
                    echo $this->Form->hidden("Filter.conditions.$i");
                }

             ?>
            <div class="span5">
                <div class="controls">
                    <div class="input-append">
                        <?php echo $this->Form->input('Filter.filter.0', array(
                            'div'=>false,
                            'class'=>'span8',
                            'autofocus' => true,
                            'title' => 'Buscar',
                            'placeholder' => 'Buscar',
                            'size'=>'16',
                            'onkeydown'=>'bloquearCtrlJ();',
                            /*'id'=>"appendedInputButton"*/
                        )); ?>

                        <?php echo $this->Form->input('Filter.conditions.0', array(
                            'label'=>false,
                            'div'=>'span3',
                            // 'empty'=>'buscar...',
                            'options' => array(
                                '='  => 'igual',
                                'LIKE'       => 'contenha',
                                'NOT LIKE'   => 'não contenha',
                                'LIKE BEGIN' => 'começando com',
                                'LIKE END'   => 'terminando com',
                                '!=' => 'diferente',
                                '>'  => 'maior do que',
                                '>=' => 'maior ou igual a',
                                '<'  => 'menor que',
                                '<=' => 'menor ou igual a'
                            ),
                            'onchange'=>'this.form.submit();'
                        )); ?>
                    </div>
                </div>            
            </div>

            <?php echo $this->fetch('filter'); ?>

            <?php echo $this->Link->icon('Novo ('. __($this->String->singular($title_for_layout)).')', 
                'icon16 icomoon-icon-checkmark white',
                array( 'action' => 'add'),
                array('class'=> 'btn btn-success')
            ); ?>

        </div>
    </div>
</div>

<?php echo $this->fetch('outros') ?>

<div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="title">
                <h3>
                    <span class="icon16 icomoon-icon-equalizer-2"></span>
                    <span><?= $this->fetch('title'); ?></span>
                    
                </h3>
                <a href="#" class="minimize">Minimize</a>
            </div>

            <div class="content noPad">
                    <?php echo $this->fetch('contents') ?>
                <div class="ocultar">
                <div class='navbar navbar-inner span3'>
                    <ul class="nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="icon16 icomoon-icon-cog"></span> Opções
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="menu">
                                    <ul>
                                        <li>
                                            <?php echo $this->Link->icon('Relatório',
                                                'icon16 icon-pencil',
                                                '#',
                                                array('onclick'=>'window.print()')
                                            ); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Link->icon('Novo',
                                                'icon16 icon-pencil',
                                                array(
                                                    'action'=>'add'
                                                )
                                            ); ?>
                                        </li>
                                        <?php echo $this->fetch('options') ?>
                                        <!-- <li>
                                            <?php echo $this->Form->button('<span class="icon16 icon-pencil"></span>Editar', 
                                                array(
                                                    'label'=>false,
                                                    'class'=>"btn span12",
                                                    'name'=>'data[action]',
                                                    'value'=>'__edit',
                                                )
                                            ); ?>                                            
                                        </li> -->
                                        <li>
                                            <?php echo $this->Form->button('<span class="icon16 icon-trash"></span>Apagar', 
                                                array(
                                                    'label'=>false,
                                                    'class'=>"btn span12",
                                                    'name'=>'data[action]',
                                                    'value'=>'__delete',
                                                    'onclick'=>"
                                                        if (
                                                            confirm(
                                                                &quot;Tem certeza?&quot;
                                                            )
                                                        ) { 
                                                            this.Form.submit(); 
                                                        } 
                                                        event.returnValue = false; 
                                                        return false;
                                                    ",
                                                )
                                            ); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                        <?php 
                            echo $this->Form->input('Pagination.limit', array(
                                'label'=>"Limite",
                                'type'=>'select',
                                'options'=> array('20'=>'20','50'=>'50','100'=>'100','500'=>'500','1000'=>'1000','10000'=>'10000'),
                                'default'=>10,
                                "class"=>"span2",
                                'onchange'=>'this.form.submit();'
                            ));
                        ?>
                    </div>
                <br>
                </div>
                <?php echo $this->element('pagination'); ?>
            </div>
        </div><!-- End .box -->
    </div>

    <div class="span4" style='float: left !important;'>
        <div class="actions form-horizontal well ucase">
            <h3><?php echo __('Relacionados'); ?></h3>
            <?php echo $this->fetch('box'); ?>
        </div>
    </div>
</div>
<?php echo $this->Form->end(); ?>
