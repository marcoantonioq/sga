<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Categoriacalendario'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th><?php echo $this->Paginator->sort('group_id', ucfirst(__('group_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Categoriacalendario}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($categoriacalendarios as $categoriacalendario): ?>
	<tr>
		<td><?php echo h($categoriacalendario['Categoriacalendario']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoriacalendario['Categoriacalendario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($categoriacalendario['Categoriacalendario']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($categoriacalendario['Categoriacalendario']['nome']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $categoriacalendario['Categoriacalendario']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $categoriacalendario['Categoriacalendario']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $categoriacalendario['Categoriacalendario']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $categoriacalendario['Categoriacalendario']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$categoriacalendario['Categoriacalendario']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Calendarios', 
			'bended_arrow_left',
			array('controller' => 'calendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Categoriacalendario.id'=>ucfirst(__('id')),
			'Categoriacalendario.nome'=>ucfirst(__('nome')),
			'Categoriacalendario.descricao'=>ucfirst(__('descricao')),
			'Categoriacalendario.group_id'=>ucfirst(__('group_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>