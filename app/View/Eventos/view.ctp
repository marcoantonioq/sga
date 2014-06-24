<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Evento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabEvento' data-toggle='tab'>Evento</a>
        </li>
        <li>
            <a href='#Manejo' data-toggle='tab'>Manejo</a>
        </li>
        <li>
            <a href='#Observacoes' data-toggle='tab'>Observações</a>
        </li>
    </ul>

    <div class='tab-content'>
        <div class='tab-pane active' id='tabEvento'> 
            <dl>
                <dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('User')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($evento['User']['username'], array('controller' => 'users', 'action' => 'view', $evento['User']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['nome']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('status')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['status']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Categoriasevento')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($evento['Categoriasevento']['nome'], array('controller' => 'categoriaseventos', 'action' => 'view', $evento['Categoriasevento']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('datainicial')); ?></dt>
                <dd>
                    <?php echo $this->Date->datetime($evento['Evento']['datainicial']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('alerta')); ?></dt>
                <dd>
                    <?php echo $this->Link->status($evento['Evento']['alerta']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('datafinal')); ?></dt>
                <dd>
                    <?php echo $this->Date->datetime($evento['Evento']['datafinal']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('datamax')); ?></dt>
                <dd>
                    <?php echo $this->Date->datetime($evento['Evento']['datamax']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>

        <div class='tab-pane' id='Manejo'> 
            <dl>
                <dt><?php echo ucfirst(__('secagens')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['secagens']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('iniciosecagem')); ?></dt>
                <dd>
                    <?php echo $this->Date->datetime($evento['Evento']['iniciosecagem']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('altura')); ?> (cm)</dt>
                <dd>
                    <?php echo h($evento['Evento']['altura']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('pesagem')); ?> (kg)</dt>
                <dd>
                    <?php echo h($evento['Evento']['pesagem']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('desaleitamento')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['desaleitamento']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('cascosnormais')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['cascosnormais']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('aptas')); ?></dt>
                <dd>
                    <?php echo $this->Link->status($evento['Evento']['aptas']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('leitepesagens')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['leitepesagens']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('escore')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['escore']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Ic')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($evento['Ic']['id'], array('controller' => 'ics', 'action' => 'view', $evento['Ic']['id'])); ?>
                    &nbsp;
                </dd>
                
                <dt><?php echo ucfirst(__('diagnostico')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['diagnostico']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('lancarcalendario')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['lancarcalendario']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['created']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['updated']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>

        <div class='tab-pane' id='Observacoes'> 
            <dl>
                
                <dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($evento['Evento']['descricao']); ?>
                    &nbsp;
                </dd>
            </dl>
        </div>
    </div>
</div>



<?php $this->start('box'); ?>

        <?php 
        echo $this->Link->icon('Users', 
            'bended_arrow_left',
            array('controller' => 'users', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Categoriaseventos', 
            'bended_arrow_left',
            array('controller' => 'categoriaseventos', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Ics', 
            'bended_arrow_left',
            array('controller' => 'ics', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Bovinos', 
            'bended_arrow_left',
            array('controller' => 'bovinos', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


        <?php 
        echo $this->Link->icon('Doencas', 
            'bended_arrow_left',
            array('controller' => 'doencas', 'action' => 'index'),
            array('class'=> 'btn btn-block')
        );
        ?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
    <div class="accordion" id="accordion1">
        
        <?php if (!empty($evento['Bovino'])): ?>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
                  Bovinos
                  <span class="icon12 entypo-icon-minus-2 gray"></span>
                </a>
                </div>
                <div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                  <?php 
            $displayFields = array(
                        ucfirst(__('id')) => 'Bovino.id',
                        ucfirst(__('nbrinco')) => 'Bovino.nbrinco',
                        ucfirst(__('pasto_id')) => 'Bovino.pasto_id',
                        ucfirst(__('nome')) => 'Bovino.nome',
                        ucfirst(__('nascimento')) => 'Bovino.nascimento',
                        ucfirst(__('status')) => 'Bovino.status',
                        ucfirst(__('cria')) => 'Bovino.cria',
                        ucfirst(__('created')) => 'Bovino.created',
                        ucfirst(__('cascosnormais')) => 'Bovino.cascosnormais',
                        ucfirst(__('updated')) => 'Bovino.updated',
            );
            echo $this->Table->createTable(
                        'Bovino',
                        $evento['Bovino'],
                        $displayFields,
                        array('view'),
                        '<h3>Atualmente você não tem propriedades enumeradas</h3>'
                    );?>
                </div>
            </div>
        </div>
        <?php endif; ?>

    
        <?php if (!empty($evento['Doenca'])): ?>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
                  Doencas
                  <span class="icon12 entypo-icon-minus-2 gray"></span>
                </a>
                </div>
                <div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
                <div class="accordion-inner">
                  <?php 
            $displayFields = array(
                        ucfirst(__('id')) => 'Doenca.id',
                        ucfirst(__('nome')) => 'Doenca.nome',
                        ucfirst(__('descricao')) => 'Doenca.descricao',
            );
            echo $this->Table->createTable(
                        'Doenca',
                        $evento['Doenca'],
                        $displayFields,
                        null,
                        '<h3>Atualmente você não tem propriedades enumeradas</h3>'
                    );?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        </div>
</div>
<?php $this->end(); ?>