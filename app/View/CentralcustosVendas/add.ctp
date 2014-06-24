<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'CentralcustosVenda'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('CentralcustosVenda', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcentralcustosVendas' data-toggle='tab'><?php echo ucfirst(__('centralcustosVendas')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcentralcustosVendas'>
				<?php 

					echo $this->Form->input('centralcusto_id', array(
						'label'=>ucfirst(__('centralcusto_id')),
					));

					echo $this->Form->input('venda_id', array(
						'label'=>ucfirst(__('venda_id')),
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
	
					<?php echo $this->Link->icon('Centralcustos', 
						null,
						array('controller' => 'centralcustos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Vendas', 
						null,
						array('controller' => 'vendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>