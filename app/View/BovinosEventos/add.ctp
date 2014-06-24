<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'BovinosEvento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('BovinosEvento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabbovinosEventos' data-toggle='tab'>bovinosEventos</a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabbovinosEventos'>
				<?php 

					echo $this->Form->input('bovino_id', array(
						'label'=>'bovino_id',
					));

					echo $this->Form->input('evento_id', array(
						'label'=>'evento_id',
					));

					echo $this->Form->input('status', array(
						'label'=>'status',
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
					<?php echo $this->Link->icon('Eventos', 
						null,
						array('controller' => 'eventos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>