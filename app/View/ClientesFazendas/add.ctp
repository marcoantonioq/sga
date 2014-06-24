<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'ClientesFazenda'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('ClientesFazenda', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabclientesFazendas' data-toggle='tab'><?php echo __('clientesFazendas') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabclientesFazendas'>
				<?php 

					echo $this->Form->input('cliente_id', array(
						'label'=>ucfirst(__('cliente_id')),
					));

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
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
	
					<?php echo $this->Link->icon('Clientes', 
						null,
						array('controller' => 'clientes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>