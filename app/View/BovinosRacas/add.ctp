<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'BovinosRaca'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('BovinosRaca', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabbovinosRacas' data-toggle='tab'><?php echo ucfirst(__('bovinosRacas')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabbovinosRacas'>
				<?php 

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('raca_id', array(
						'label'=>ucfirst(__('raca_id')),
					));

					echo $this->Form->input('percentual', array(
						'label'=>ucfirst(__('percentual')),
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
	
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Racas', 
						null,
						array('controller' => 'racas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>