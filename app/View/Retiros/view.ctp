<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Retiro'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabRetiro' data-toggle='tab'><?php echo __('Retiro'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabRetiro'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fazenda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($retiro['Fazenda']['id'], array('controller' => 'fazendas', 'action' => 'view', $retiro['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cod_ordenha')); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['cod_ordenha']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($retiro['Retiro']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pastos', 
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($retiro['Pasto'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Pastos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Pasto.id',
						'Retiro Id' => 'Pasto.retiro_id',
						'Nome' => 'Pasto.nome',
						'Tipo' => 'Pasto.tipo',
						'Datainclusao' => 'Pasto.datainclusao',
						'Area' => 'Pasto.area',
						'Topografia' => 'Pasto.topografia',
						'Tipoaguado' => 'Pasto.tipoaguado',
						'Bovino Count' => 'Pasto.bovino_count',
						'Descricao' => 'Pasto.descricao',
			);
			echo $this->Table->createTable(
						'Pasto',
						$retiro['Pasto'],
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