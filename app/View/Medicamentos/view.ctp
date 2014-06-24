<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Medicamento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabMedicamento' data-toggle='tab'><?php echo __('Medicamento'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabMedicamento'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fazenda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($medicamento['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $medicamento['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fabricante')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($medicamento['Fabricante']['nome'], array('controller' => 'fabricantes', 'action' => 'view', $medicamento['Fabricante']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('categoria')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['categoria']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('notafiscal')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['notafiscal']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('unidade')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['unidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('comprado')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['comprado']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('dose')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['dose']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('validade')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['validade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('prescricao')); ?></dt>
                <dd>
                    <?php echo h($medicamento['Medicamento']['prescricao']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('fazendas')), 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('fabricantes')), 
			'bended_arrow_left',
			array('controller' => 'fabricantes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('bovinos')), 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($medicamento['Bovino'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Bovinos'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('idvenda')) => 'Bovino.idvenda',
						ucfirst(__('idcompra')) => 'Bovino.idcompra',
						ucfirst(__('id')) => 'Bovino.id',
						ucfirst(__('nbrinco')) => 'Bovino.nbrinco',
						ucfirst(__('pai')) => 'Bovino.pai',
						ucfirst(__('mae')) => 'Bovino.mae',
						ucfirst(__('pasto_id')) => 'Bovino.pasto_id',
						ucfirst(__('categoriab_id')) => 'Bovino.categoriab_id',
						ucfirst(__('sexobovino_id')) => 'Bovino.sexobovino_id',
						ucfirst(__('pelagen_id')) => 'Bovino.pelagen_id',
						ucfirst(__('nome')) => 'Bovino.nome',
						ucfirst(__('nascimento')) => 'Bovino.nascimento',
						ucfirst(__('desaleitamento')) => 'Bovino.desaleitamento',
						ucfirst(__('preco')) => 'Bovino.preco',
						ucfirst(__('descricao')) => 'Bovino.descricao',
						ucfirst(__('status')) => 'Bovino.status',
						ucfirst(__('cria')) => 'Bovino.cria',
						ucfirst(__('created')) => 'Bovino.created',
						ucfirst(__('cascosnormais')) => 'Bovino.cascosnormais',
						ucfirst(__('updated')) => 'Bovino.updated',
			);
			echo $this->Table->createTable(
						'Bovino',
						$medicamento['Bovino'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>