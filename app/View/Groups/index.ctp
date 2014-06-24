<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Group'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('name', ucfirst(__('name'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('modified', ucfirst(__('modified'))); ?></th>
			<th><?php echo $this->Paginator->sort('user_count', ucfirst(__('user_count'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Group}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['user_count']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $group['Group']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $group['Group']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $group['Group']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $group['Group']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$group['Group']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Group.id'=>ucfirst(__('id')),
			'Group.name'=>ucfirst(__('name')),
			'Group.descricao'=>ucfirst(__('descricao')),
			'Group.created'=>ucfirst(__('created')),
			'Group.modified'=>ucfirst(__('modified')),
			'Group.user_count'=>ucfirst(__('user_count')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>