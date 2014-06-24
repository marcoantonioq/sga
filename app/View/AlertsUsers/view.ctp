<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'AlertsUser'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabAlerts User' data-toggle='tab'><?php echo __('Alerts User'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabAlerts User'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($alertsUser['AlertsUser']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Alert')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($alertsUser['Alert']['id'], array('controller' => 'alerts', 'action' => 'view', $alertsUser['Alert']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('User')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($alertsUser['User']['username'], array('controller' => 'users', 'action' => 'view', $alertsUser['User']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('read')); ?></dt>
                <dd>
                    <?php echo h($alertsUser['AlertsUser']['read']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('__(alerts)', 
			'bended_arrow_left',
			array('controller' => 'alerts', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('__(users)', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
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