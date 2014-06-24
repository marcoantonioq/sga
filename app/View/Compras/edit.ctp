<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Compra'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Compra', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcompras' data-toggle='tab'><?php echo ucfirst(__('compras')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcompras'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('fornecedore_id', array(
						'label'=>ucfirst(__('fornecedore_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('quantidade', array(
						'label'=>ucfirst(__('quantidade')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('emissao', array(
						'label'=>ucfirst(__('emissao')),
					));

					echo $this->Form->input('pago', array(
						'label'=>ucfirst(__('pago')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
					));

					echo $this->Form->input('Centralcusto', array(
						'label'=>ucfirst(__('Centralcusto')),
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
	
					<?php echo $this->Link->icon('Fornecedores', 
						null,
						array('controller' => 'fornecedores', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Patrimonios', 
						null,
						array('controller' => 'patrimonios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Centralcustos', 
						null,
						array('controller' => 'centralcustos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>