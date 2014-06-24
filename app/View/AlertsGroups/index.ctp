<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'AlertsGroup'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('alert_id', ucfirst(__('alert_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('group_id', ucfirst(__('group_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{AlertsGroup}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($alertsGroups as $alertsGroup): ?>
	<tr>
		<td><?php echo h($alertsGroup['AlertsGroup']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alertsGroup['Alert']['id'], array('controller' => 'alerts', 'action' => 'view', $alertsGroup['Alert']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alertsGroup['Group']['id'], array('controller' => 'groups', 'action' => 'view', $alertsGroup['Group']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $alertsGroup['AlertsGroup']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $alertsGroup['AlertsGroup']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $alertsGroup['AlertsGroup']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $alertsGroup['AlertsGroup']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$alertsGroup['AlertsGroup']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Alerts', 
			'bended_arrow_left',
			array('controller' => 'alerts', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Groups', 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'AlertsGroup.id'=>ucfirst(__('id')),
			'AlertsGroup.alert_id'=>ucfirst(__('alert_id')),
			'AlertsGroup.group_id'=>ucfirst(__('group_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>