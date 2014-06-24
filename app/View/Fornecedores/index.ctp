<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Fornecedore'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('rua', ucfirst(__('rua'))); ?></th>
			<th><?php echo $this->Paginator->sort('bairro', ucfirst(__('bairro'))); ?></th>
			<th><?php echo $this->Paginator->sort('municipio', ucfirst(__('municipio'))); ?></th>
			<th><?php echo $this->Paginator->sort('cep', ucfirst(__('cep'))); ?></th>
			<th><?php echo $this->Paginator->sort('estato', ucfirst(__('estato'))); ?></th>
			<th><?php echo $this->Paginator->sort('telefone', ucfirst(__('telefone'))); ?></th>
			<th><?php echo $this->Paginator->sort('fax', ucfirst(__('fax'))); ?></th>
			<th><?php echo $this->Paginator->sort('email', ucfirst(__('email'))); ?></th>
			<th><?php echo $this->Paginator->sort('cnpj', ucfirst(__('cnpj'))); ?></th>
			<th><?php echo $this->Paginator->sort('inscricaoestatual', ucfirst(__('inscricaoestatual'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Fornecedore}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($fornecedores as $fornecedore): ?>
	<tr>
		<td><?php echo h($fornecedore['Fornecedore']['id']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['nome']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['rua']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['municipio']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['cep']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['estato']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['fax']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['email']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['cnpj']); ?>&nbsp;</td>
		<td><?php echo h($fornecedore['Fornecedore']['inscricaoestatual']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fornecedore['Fornecedore']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fornecedore['Fornecedore']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fornecedore['Fornecedore']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fornecedore['Fornecedore']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fornecedore['Fornecedore']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Compras', 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
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
			'Fornecedore.id'=>ucfirst(__('id')),
			'Fornecedore.nome'=>ucfirst(__('nome')),
			'Fornecedore.rua'=>ucfirst(__('rua')),
			'Fornecedore.bairro'=>ucfirst(__('bairro')),
			'Fornecedore.municipio'=>ucfirst(__('municipio')),
			'Fornecedore.cep'=>ucfirst(__('cep')),
			'Fornecedore.estato'=>ucfirst(__('estato')),
			'Fornecedore.telefone'=>ucfirst(__('telefone')),
			'Fornecedore.fax'=>ucfirst(__('fax')),
			'Fornecedore.email'=>ucfirst(__('email')),
			'Fornecedore.cnpj'=>ucfirst(__('cnpj')),
			'Fornecedore.inscricaoestatual'=>ucfirst(__('inscricaoestatual')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>