<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Cliente'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('telefone', ucfirst(__('telefone'))); ?></th>
			<th><?php echo $this->Paginator->sort('fax', ucfirst(__('fax'))); ?></th>
			<th><?php echo $this->Paginator->sort('contato', ucfirst(__('contato'))); ?></th>
			<th><?php echo $this->Paginator->sort('municipio', ucfirst(__('municipio'))); ?></th>
			<th><?php echo $this->Paginator->sort('estato', ucfirst(__('estato'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Cliente}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['fax']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['contato']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['municipio']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['estato']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $cliente['Cliente']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $cliente['Cliente']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $cliente['Cliente']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $cliente['Cliente']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$cliente['Cliente']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Vendas', 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
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
			'Cliente.id'=>ucfirst(__('id')),
			'Cliente.cpf'=>ucfirst(__('cpf')),
			'Cliente.nome'=>ucfirst(__('nome')),
			'Cliente.telefone'=>ucfirst(__('telefone')),
			'Cliente.fax'=>ucfirst(__('fax')),
			'Cliente.email'=>ucfirst(__('email')),
			'Cliente.contato'=>ucfirst(__('contato')),
			'Cliente.rua'=>ucfirst(__('rua')),
			'Cliente.bairro'=>ucfirst(__('bairro')),
			'Cliente.municipio'=>ucfirst(__('municipio')),
			'Cliente.cep'=>ucfirst(__('cep')),
			'Cliente.estato'=>ucfirst(__('estato')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>