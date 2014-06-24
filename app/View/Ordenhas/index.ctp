<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Ordenha'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('local', ucfirst(__('local'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Ordenha}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($ordenhas as $ordenha): ?>
	<tr>
		<td><?php echo h($ordenha['Ordenha']['id']); ?>&nbsp;</td>
		<td><?php echo h($ordenha['Ordenha']['nome']); ?>&nbsp;</td>
		<td><?php echo h($ordenha['Ordenha']['local']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $ordenha['Ordenha']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $ordenha['Ordenha']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $ordenha['Ordenha']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $ordenha['Ordenha']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$ordenha['Ordenha']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Leitepesagens', 
			'bended_arrow_left',
			array('controller' => 'leitepesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Ordenha.id'=>ucfirst(__('id')),
			'Ordenha.nome'=>ucfirst(__('nome')),
			'Ordenha.local'=>ucfirst(__('local')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>