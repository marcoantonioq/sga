<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Venda'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('produto_id', ucfirst(__('produto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id', ucfirst(__('cliente_id'))); ?></th>
			
			<th><?php echo $this->Paginator->sort('quantidade', ucfirst(__('quantidade'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Venda}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($vendas as $venda): ?>
	<tr>
		<td><?php echo h($venda['Venda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venda['Produto']['nome'], array('controller' => 'produtos', 'action' => 'view', $venda['Produto']['id'])); ?>
		</td>
		<td><?php echo h($venda['Venda']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venda['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $venda['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($venda['Venda']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['data']); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['created']); ?>&nbsp;</td>
		<td><?php echo h($venda['Venda']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $venda['Venda']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $venda['Venda']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $venda['Venda']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $venda['Venda']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$venda['Venda']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Produtos', 
			'bended_arrow_left',
			array('controller' => 'produtos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Clientes', 
			'bended_arrow_left',
			array('controller' => 'clientes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Centralcustos', 
			'bended_arrow_left',
			array('controller' => 'centralcustos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Venda.id'=>ucfirst(__('id')),
			'Venda.produto_id'=>ucfirst(__('produto_id')),
			'Venda.nome'=>ucfirst(__('nome')),
			'Venda.cliente_id'=>ucfirst(__('cliente_id')),
			'Venda.patrimonio_id'=>ucfirst(__('patrimonio_id')),
			'Venda.quantidade'=>ucfirst(__('quantidade')),
			'Venda.valor'=>ucfirst(__('valor')),
			'Venda.pago'=>ucfirst(__('pago')),
			'Venda.emissao'=>ucfirst(__('emissao')),
			'Venda.descricao'=>ucfirst(__('descricao')),
			'Venda.data'=>ucfirst(__('data')),
			'Venda.created'=>ucfirst(__('created')),
			'Venda.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>