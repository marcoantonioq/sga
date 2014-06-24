<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Patrimonio'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('fabricante_id', ucfirst(__('fabricante_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('categoriap_id', ucfirst(__('categoriap_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('compra_id', ucfirst(__('compra_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('unidade', ucfirst(__('unidade'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Patrimonio}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($patrimonios as $patrimonio): ?>
	<tr>
		<td><?php echo h($patrimonio['Patrimonio']['id']); ?>&nbsp;</td>
		<td><?php echo h($patrimonio['Patrimonio']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimonio['Fabricante']['nome'], array('controller' => 'fabricantes', 'action' => 'view', $patrimonio['Fabricante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimonio['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $patrimonio['Fazenda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimonio['Categoriap']['nome'], array('controller' => 'categoriaps', 'action' => 'view', $patrimonio['Categoriap']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimonio['Compra']['nome'], array('controller' => 'compras', 'action' => 'view', $patrimonio['Compra']['id'])); ?>
		</td>
		<td><?php echo h($patrimonio['Patrimonio']['unidade']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($patrimonio['Patrimonio']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $patrimonio['Patrimonio']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $patrimonio['Patrimonio']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $patrimonio['Patrimonio']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $patrimonio['Patrimonio']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$patrimonio['Patrimonio']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fabricantes', 
			'bended_arrow_left',
			array('controller' => 'fabricantes', 'action' => 'index'),
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


		<?php 
		echo $this->Link->icon('Categoriaps', 
			'bended_arrow_left',
			array('controller' => 'categoriaps', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Compras', 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Vendas', 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Patrimonio.id'=>ucfirst(__('id')),
			'Patrimonio.nome'=>ucfirst(__('nome')),
			'Patrimonio.fabricante_id'=>ucfirst(__('fabricante_id')),
			'Patrimonio.fazenda_id'=>ucfirst(__('fazenda_id')),
			'Patrimonio.categoriap_id'=>ucfirst(__('categoriap_id')),
			'Patrimonio.compra_id'=>ucfirst(__('compra_id')),
			'Patrimonio.unidade'=>ucfirst(__('unidade')),
			'Patrimonio.valor'=>ucfirst(__('valor')),
			'Patrimonio.comprado'=>ucfirst(__('comprado')),
			'Patrimonio.depreciacao'=>ucfirst(__('depreciacao')),
			'Patrimonio.descricao'=>ucfirst(__('descricao')),
			'Patrimonio.created'=>ucfirst(__('created')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>