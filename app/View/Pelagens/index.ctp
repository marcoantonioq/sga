<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Pelagen'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_count', ucfirst(__('bovino_count'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Pelagen}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pelagens as $pelagen): ?>
	<tr>
		<td><?php echo h($pelagen['Pelagen']['id']); ?>&nbsp;</td>
		<td><?php echo h($pelagen['Pelagen']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pelagen['Pelagen']['bovino_count']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pelagen['Pelagen']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pelagen['Pelagen']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pelagen['Pelagen']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pelagen['Pelagen']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pelagen['Pelagen']['id'], array( 'class'=>'styled' ));?>
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
			'Pelagen.id'=>ucfirst(__('id')),
			'Pelagen.nome'=>ucfirst(__('nome')),
			'Pelagen.bovino_count'=>ucfirst(__('bovino_count')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>