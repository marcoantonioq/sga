<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Alert'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('titulo', ucfirst(__('titulo'))); ?></th>
			<th><?php echo $this->Paginator->sort('tipo', ucfirst(__('tipo'))); ?></th>
			<th><?php echo $this->Paginator->sort('nivel', ucfirst(__('nivel'))); ?></th>
			<th><?php echo $this->Paginator->sort('categoria', ucfirst(__('categoria'))); ?></th>
			<th><?php echo $this->Paginator->sort('origem', ucfirst(__('origem'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Alert}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($alerts as $alert): ?>
	<tr>
		<td><?php echo h($alert['Alert']['id']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['nivel']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['origem']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['created']); ?>&nbsp;</td>
		<td><?php echo h($alert['Alert']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $alert['Alert']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $alert['Alert']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $alert['Alert']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $alert['Alert']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$alert['Alert']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Groups', 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
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
			'Alert.id'=>ucfirst(__('id')),
			'Alert.titulo'=>ucfirst(__('titulo')),
			'Alert.tipo'=>ucfirst(__('tipo')),
			'Alert.nivel'=>ucfirst(__('nivel')),
			'Alert.categoria'=>ucfirst(__('categoria')),
			'Alert.origem'=>ucfirst(__('origem')),
			'Alert.messagem'=>ucfirst(__('messagem')),
			'Alert.created'=>ucfirst(__('created')),
			'Alert.updated'=>ucfirst(__('updated')),
			'Alert.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>