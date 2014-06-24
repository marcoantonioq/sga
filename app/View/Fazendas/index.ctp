<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Fazenda'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('proprietario', ucfirst(__('proprietario'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('telefone', ucfirst(__('telefone'))); ?></th>
			<th><?php echo $this->Paginator->sort('fax', ucfirst(__('fax'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Fazenda}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($fazendas as $fazenda): ?>
	<tr>
		<td><?php echo h($fazenda['Fazenda']['id']); ?>&nbsp;</td>
		<td><?php echo h($fazenda['Fazenda']['proprietario']); ?>&nbsp;</td>
		<td><?php echo h($fazenda['Fazenda']['nome']); ?>&nbsp;</td>
		<td><?php echo h($fazenda['Fazenda']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($fazenda['Fazenda']['fax']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fazenda['Fazenda']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fazenda['Fazenda']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fazenda['Fazenda']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fazenda['Fazenda']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fazenda['Fazenda']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Accounts', 
			'bended_arrow_left',
			array('controller' => 'accounts', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Calendarios', 
			'bended_arrow_left',
			array('controller' => 'calendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Medicamentos', 
			'bended_arrow_left',
			array('controller' => 'medicamentos', 'action' => 'index'),
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
		echo $this->Link->icon('Retiros', 
			'bended_arrow_left',
			array('controller' => 'retiros', 'action' => 'index'),
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
		echo $this->Link->icon('Fornecedores', 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Fazenda.id'=>ucfirst(__('id')),
			'Fazenda.proprietario'=>ucfirst(__('proprietario')),
			'Fazenda.nome'=>ucfirst(__('nome')),
			'Fazenda.telefone'=>ucfirst(__('telefone')),
			'Fazenda.saldo'=>ucfirst(__('saldo')),
			'Fazenda.cnpj'=>ucfirst(__('cnpj')),
			'Fazenda.estado'=>ucfirst(__('estado')),
			'Fazenda.cidade'=>ucfirst(__('cidade')),
			'Fazenda.inscricaoestatual'=>ucfirst(__('inscricaoestatual')),
			'Fazenda.fax'=>ucfirst(__('fax')),
			'Fazenda.atividades'=>ucfirst(__('atividades')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>