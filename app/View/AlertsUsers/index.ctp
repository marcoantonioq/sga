<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'AlertsUser'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('alert_id', ucfirst(__('alert_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('user_id', ucfirst(__('user_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{AlertsUser}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($alertsUsers as $alertsUser): ?>
	<tr>
		<td><?php echo h($alertsUser['AlertsUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alertsUser['Alert']['id'], array('controller' => 'alerts', 'action' => 'view', $alertsUser['Alert']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alertsUser['User']['username'], array('controller' => 'users', 'action' => 'view', $alertsUser['User']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $alertsUser['AlertsUser']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $alertsUser['AlertsUser']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $alertsUser['AlertsUser']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $alertsUser['AlertsUser']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$alertsUser['AlertsUser']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'AlertsUser.id'=>ucfirst(__('id')),
			'AlertsUser.alert_id'=>ucfirst(__('alert_id')),
			'AlertsUser.user_id'=>ucfirst(__('user_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>