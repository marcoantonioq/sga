<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Pessoa'); ?>


<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('name', ucfirst(__('name'))); ?></th>
			<th><?php echo $this->Paginator->sort('username', ucfirst(__('username'))); ?></th>
			<th><?php echo $this->Paginator->sort('sexo_id', ucfirst(__('sexo_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('email', ucfirst(__('email'))); ?></th>
			<th><?php echo $this->Paginator->sort('status', ucfirst(__('status'))); ?></th>
			<th><?php echo $this->Paginator->sort('carteiratrabalho', ucfirst(__('carteiratrabalho'))); ?></th>
			<th><?php echo $this->Paginator->sort('cpf', ucfirst(__('cpf'))); ?></th>
			<th><?php echo $this->Paginator->sort('telefone', ucfirst(__('telefone'))); ?></th>
			<th><?php echo $this->Paginator->sort('datecontratado', ucfirst(__('datecontratado'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Pessoa}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pessoas as $pessoa): ?>
	<tr>
		<td><?php echo h($pessoa['Pessoa']['id']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['name']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['username']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoa['Sexo']['nome'], array('controller' => 'sexos', 'action' => 'view', $pessoa['Sexo']['id'])); ?>
		</td>
		<td><?php echo h($pessoa['Pessoa']['email']); ?>&nbsp;</td>
		<td><?php echo $this->Link->status($pessoa['Pessoa']['status']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['carteiratrabalho']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['datecontratado']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pessoa['Pessoa']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pessoa['Pessoa']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pessoa['Pessoa']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pessoa['Pessoa']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pessoa['Pessoa']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Sexos', 
			'bended_arrow_left',
			array('controller' => 'sexos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

		<?php 
		echo $this->Link->icon('Usuários', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
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


		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Cargos', 
			'bended_arrow_left',
			array('controller' => 'cargos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Pessoa.id'=>ucfirst(__('id')),
			'Pessoa.name'=>ucfirst(__('name')),
			'Pessoa.username'=>ucfirst(__('username')),
			'Sexo.nome'=>ucfirst(__('sexo_id')),
			'Pessoa.email'=>ucfirst(__('email')),
			'Pessoa.password'=>ucfirst(__('password')),
			'Pessoa.status'=>ucfirst(__('status')),
			'Pessoa.contabanco'=>ucfirst(__('contabanco')),
			'Pessoa.nascimento'=>ucfirst(__('nascimento')),
			'Pessoa.carteiratrabalho'=>ucfirst(__('carteiratrabalho')),
			'Pessoa.anexo'=>ucfirst(__('anexo')),
			'Pessoa.anexo_dir'=>ucfirst(__('anexo_dir')),
			'Pessoa.cpf'=>ucfirst(__('cpf')),
			'Pessoa.rg'=>ucfirst(__('rg')),
			'Pessoa.estado'=>ucfirst(__('estado')),
			'Pessoa.cidade'=>ucfirst(__('cidade')),
			'Pessoa.rua'=>ucfirst(__('rua')),
			'Pessoa.bairro'=>ucfirst(__('bairro')),
			'Pessoa.cep'=>ucfirst(__('cep')),
			'Pessoa.telefone'=>ucfirst(__('telefone')),
			'Pessoa.datecontratado'=>ucfirst(__('datecontratado')),
			'Pessoa.premiacoes'=>ucfirst(__('premiacoes')),
			'Pessoa.parent_id'=>ucfirst(__('parent_id')),
			'Pessoa.lft'=>ucfirst(__('lft')),
			'Pessoa.rght'=>ucfirst(__('rght')),
			'Pessoa.foto'=>ucfirst(__('foto')),
			'Pessoa.foto_dir'=>ucfirst(__('foto_dir')),
			'Pessoa.updated'=>ucfirst(__('updated')),
			'Pessoa.created'=>ucfirst(__('created')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>