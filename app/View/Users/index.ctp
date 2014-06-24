<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Usuários'); ?>

<?php $this->start('contents'); ?>


<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('username', ucfirst(__('username'))); ?></th>
			<th><?php echo $this->Paginator->sort('email', ucfirst(__('email'))); ?></th>
			<th><?php echo $this->Paginator->sort('sexo_id', ucfirst(__('sexo_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('group_id', ucfirst(__('group_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{User}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Sexo']['nome'], array('controller' => 'sexos', 'action' => 'view', $user['Sexo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $user['User']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $user['User']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $user['User']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $user['User']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$user['User']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>



<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Sexos', 
			'bended_arrow_left',
			array('controller' => 'sexos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Grupos', 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Ocorrências', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>
	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'User.id'=>ucfirst(__('id')),
			'User.username'=>ucfirst(__('username')),
			'User.email'=>ucfirst(__('email')),
		),
        /*'empty' => 'Type',*/
    )); ?>
<?php echo $this->end(); ?>