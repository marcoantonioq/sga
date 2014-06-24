<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Pesagen'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Pesagen', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpesagens' data-toggle='tab'><?php echo ucfirst(__('pesagens')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpesagens'>
				<?php 

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('peso', array(
						'label'=>ucfirst(__('peso')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m"),
					));

					echo $this->Form->input('pasto_id', array(
						'label'=>ucfirst(__('pasto_id')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('title', array(
						'label'=>ucfirst(__('title')),
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