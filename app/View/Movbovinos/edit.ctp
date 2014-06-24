<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Movbovino'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Movbovino', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabmovbovinos' data-toggle='tab'><?php echo ucfirst(__('movbovinos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabmovbovinos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('pasto_id', array(
						'label'=>ucfirst(__('pasto_id')),
					));

					echo $this->Form->input('pastoanterior', array(
						'label'=>ucfirst(__('pastoanterior')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m"),
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
					<?php echo $this->Link->icon('Pastos', 
						null,
						array('controller' => 'pastos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>