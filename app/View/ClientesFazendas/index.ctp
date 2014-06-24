<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'ClientesFazenda'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id', ucfirst(__('cliente_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{ClientesFazenda}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($clientesFazendas as $clientesFazenda): ?>
	<tr>
		<td><?php echo h($clientesFazenda['ClientesFazenda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientesFazenda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientesFazenda['Cliente']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($clientesFazenda['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $clientesFazenda['Fazenda']['id'])); ?>
		</td>
		<td><?php echo h($clientesFazenda['ClientesFazenda']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientesFazenda['ClientesFazenda']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $clientesFazenda['ClientesFazenda']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $clientesFazenda['ClientesFazenda']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $clientesFazenda['ClientesFazenda']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $clientesFazenda['ClientesFazenda']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$clientesFazenda['ClientesFazenda']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Clientes', 
			'bended_arrow_left',
			array('controller' => 'clientes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'ClientesFazenda.id'=>ucfirst(__('id')),
			'ClientesFazenda.cliente_id'=>ucfirst(__('cliente_id')),
			'ClientesFazenda.fazenda_id'=>ucfirst(__('fazenda_id')),
			'ClientesFazenda.created'=>ucfirst(__('created')),
			'ClientesFazenda.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>