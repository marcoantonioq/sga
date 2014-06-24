<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Custo'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('item', ucfirst(__('item'))); ?></th>
			<th><?php echo $this->Paginator->sort('valor', ucfirst(__('valor'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Custo}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($custos as $custo): ?>
	<tr>
		<td><?php echo h($custo['Custo']['id']); ?>&nbsp;</td>
		<td><?php echo h($custo['Custo']['item']); ?>&nbsp;</td>
		<td><?php echo h($custo['Custo']['valor']); ?>&nbsp;</td>
		<td><?php echo h($custo['Custo']['descricao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $custo['Custo']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $custo['Custo']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $custo['Custo']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $custo['Custo']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$custo['Custo']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Custo.id'=>ucfirst(__('id')),
			'Custo.item'=>ucfirst(__('item')),
			'Custo.valor'=>ucfirst(__('valor')),
			'Custo.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>