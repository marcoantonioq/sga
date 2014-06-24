<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Compra'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fornecedore_id', ucfirst(__('fornecedore_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade', ucfirst(__('quantidade'))); ?></th>
			<th><?php echo $this->Paginator->sort('valor', ucfirst(__('valor'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Compra}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($compras as $compra): ?>
	<tr>
		<td><?php echo h($compra['Compra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($compra['Fornecedore']['nome'], array('controller' => 'fornecedores', 'action' => 'view', $compra['Fornecedore']['id'])); ?>
		</td>
		<td><?php echo h($compra['Compra']['nome']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['valor']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['data']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['created']); ?>&nbsp;</td>
		<td><?php echo h($compra['Compra']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $compra['Compra']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $compra['Compra']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $compra['Compra']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $compra['Compra']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$compra['Compra']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fornecedores', 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
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
			'Compra.id'=>ucfirst(__('id')),
			'Compra.fornecedore_id'=>ucfirst(__('fornecedore_id')),
			'Compra.nome'=>ucfirst(__('nome')),
			'Compra.quantidade'=>ucfirst(__('quantidade')),
			'Compra.valor'=>ucfirst(__('valor')),
			'Compra.emissao'=>ucfirst(__('emissao')),
			'Compra.pago'=>ucfirst(__('pago')),
			'Compra.descricao'=>ucfirst(__('descricao')),
			'Compra.data'=>ucfirst(__('data')),
			'Compra.created'=>ucfirst(__('created')),
			'Compra.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>