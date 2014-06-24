<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Produto'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('fabricante_id', ucfirst(__('fabricante_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th><?php echo $this->Paginator->sort('valor', ucfirst(__('valor'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Produto}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($produtos as $produto): ?>
	<tr>
		<td><?php echo h($produto['Produto']['id']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($produto['Fabricante']['nome'], array('controller' => 'fabricantes', 'action' => 'view', $produto['Fabricante']['id'])); ?>
		</td>
		<td><?php echo h($produto['Produto']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($produto['Produto']['valor']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $produto['Produto']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $produto['Produto']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $produto['Produto']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $produto['Produto']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$produto['Produto']['id'], array( 'class'=>'styled' ));?>
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
			'Produto.id'=>ucfirst(__('id')),
			'Produto.nome'=>ucfirst(__('nome')),
			'Produto.fabricante_id'=>ucfirst(__('fabricante_id')),
			'Produto.descricao'=>ucfirst(__('descricao')),
			'Produto.valor'=>ucfirst(__('valor')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>