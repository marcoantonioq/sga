<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'AlertsGroup'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('AlertsGroup', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabalertsGroups' data-toggle='tab'><?php echo ucfirst(__('alertsGroups')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabalertsGroups'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('alert_id', array(
						'label'=>ucfirst(__('alert_id')),
					));

					echo $this->Form->input('group_id', array(
						'label'=>ucfirst(__('group_id')),
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
	
					<?php echo $this->Link->icon('Alerts', 
						null,
						array('controller' => 'alerts', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Groups', 
						null,
						array('controller' => 'groups', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>