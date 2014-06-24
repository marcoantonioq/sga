<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'MedicamentosBovino'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('MedicamentosBovino', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabmedicamentosBovinos' data-toggle='tab'><?php echo ucfirst(__('medicamentosBovinos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabmedicamentosBovinos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('medicamento_id', array(
						'label'=>ucfirst(__('medicamento_id')),
					));

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('observacoes', array(
						'label'=>ucfirst(__('observacoes')),
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
	
					<?php echo $this->Link->icon('Medicamentos', 
						null,
						array('controller' => 'medicamentos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>