<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Semem'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Semem', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabsemems' data-toggle='tab'><?php echo __('semems') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabsemems'>
				<?php 

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('pai', array(
						'label'=>ucfirst(__('pai')),
					));

					echo $this->Form->input('mae', array(
						'label'=>ucfirst(__('mae')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m"),
					));

					echo $this->Form->input('origem', array(
						'label'=>ucfirst(__('origem')),
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
	
					<?php echo $this->Link->icon('Ics', 
						null,
						array('controller' => 'ics', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>