<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Sexobovino'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('count', ucfirst(__('count'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_count', ucfirst(__('bovino_count'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Sexobovino}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($sexobovinos as $sexobovino): ?>
	<tr>
		<td><?php echo h($sexobovino['Sexobovino']['id']); ?>&nbsp;</td>
		<td><?php echo h($sexobovino['Sexobovino']['nome']); ?>&nbsp;</td>
		<td><?php echo h($sexobovino['Sexobovino']['count']); ?>&nbsp;</td>
		<td><?php echo h($sexobovino['Sexobovino']['bovino_count']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $sexobovino['Sexobovino']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $sexobovino['Sexobovino']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $sexobovino['Sexobovino']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $sexobovino['Sexobovino']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$sexobovino['Sexobovino']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Sexobovino.id'=>ucfirst(__('id')),
			'Sexobovino.nome'=>ucfirst(__('nome')),
			'Sexobovino.count'=>ucfirst(__('count')),
			'Sexobovino.bovino_count'=>ucfirst(__('bovino_count')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>