<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Meteorologico'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Meteorologico', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabmeteorologicos' data-toggle='tab'><?php echo ucfirst(__('meteorologicos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabmeteorologicos'>
				<?php 

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
					));

					echo $this->Form->input('umidademin', array(
						'label'=>ucfirst(__('umidademin')),
					));

					echo $this->Form->input('umidademax', array(
						'label'=>ucfirst(__('umidademax')),
					));

					echo $this->Form->input('chuva', array(
						'label'=>ucfirst(__('chuva')),
					));

					echo $this->Form->input('temperaturamin', array(
						'label'=>ucfirst(__('temperaturamin')),
					));

					echo $this->Form->input('temperaturamax', array(
						'label'=>ucfirst(__('temperaturamax')),
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
	
<?php $this->end(); ?>


<?php $this->end(); ?>