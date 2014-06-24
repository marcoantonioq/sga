<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Leitepesagen'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Leitepesagen', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tableitepesagens' data-toggle='tab'><?php echo __('leitepesagens') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tableitepesagens'>
				<?php 

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('ordenha_id', array(
						'label'=>ucfirst(__('ordenha_id')),
					));

					echo $this->Form->input('peso', array(
						'label'=>ucfirst(__('peso')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
'type'=>'datetime-local',
'value'=>date("Y-m-d\TH:m"),
					));

					echo $this->Form->input('escore', array(
						'label'=>ucfirst(__('escore')),
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
	
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Ordenhas', 
						null,
						array('controller' => 'ordenhas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>