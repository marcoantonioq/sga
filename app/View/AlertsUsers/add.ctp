<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'AlertsUser'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('AlertsUser', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabalertsUsers' data-toggle='tab'><?php echo ucfirst(__('alertsUsers')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabalertsUsers'>
				<?php 

					echo $this->Form->input('alert_id', array(
						'label'=>ucfirst(__('alert_id')),
					));

					echo $this->Form->input('user_id', array(
						'label'=>ucfirst(__('user_id')),
					));

					echo $this->Form->input('read', array(
						'label'=>ucfirst(__('read')),
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
					<?php echo $this->Link->icon('Users', 
						null,
						array('controller' => 'users', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>