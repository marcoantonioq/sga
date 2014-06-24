<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'AlertsGroup'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabAlerts Group' data-toggle='tab'><?php echo __('Alerts Group'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabAlerts Group'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($alertsGroup['AlertsGroup']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Alert')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($alertsGroup['Alert']['id'], array('controller' => 'alerts', 'action' => 'view', $alertsGroup['Alert']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Group')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($alertsGroup['Group']['id'], array('controller' => 'groups', 'action' => 'view', $alertsGroup['Group']['id'])); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('alerts'), 
			'bended_arrow_left',
			array('controller' => 'alerts', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('groups'), 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>