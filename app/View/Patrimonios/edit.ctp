<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Patrimonio'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Patrimonio', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpatrimonios' data-toggle='tab'><?php echo ucfirst(__('patrimonios')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpatrimonios'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('fabricante_id', array(
						'label'=>ucfirst(__('fabricante_id')),
					));

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
					));

					echo $this->Form->input('categoriap_id', array(
						'label'=>ucfirst(__('categoriap_id')),
					));

					echo $this->Form->input('compra_id', array(
						'label'=>ucfirst(__('compra_id')),
					));

					echo $this->Form->input('unidade', array(
						'label'=>ucfirst(__('unidade')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('comprado', array(
						'label'=>ucfirst(__('comprado')),
					));

					echo $this->Form->input('depreciacao', array(
						'label'=>ucfirst(__('depreciacao')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));
				?>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="form-actions">
		<button type="submit" class="btn btn-info">Save</button>
		<?php 
		echo $this->Html->link('Cancel',
			array('action'=>'index'),
			array('class'=>'btn btn-warning')
		);
?>	</div>	
</div>

<?php $this->start('box'); ?>
	
					<?php echo $this->Link->icon('Fabricantes', 
						null,
						array('controller' => 'fabricantes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Categoriaps', 
						null,
						array('controller' => 'categoriaps', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Compras', 
						null,
						array('controller' => 'compras', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Vendas', 
						null,
						array('controller' => 'vendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>