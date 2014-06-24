<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'PessoasCargo'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id', ucfirst(__('pessoa_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_id', ucfirst(__('cargo_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{PessoasCargo}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pessoasCargos as $pessoasCargo): ?>
	<tr>
		<td><?php echo h($pessoasCargo['PessoasCargo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pessoasCargo['Pessoa']['name'], array('controller' => 'pessoas', 'action' => 'view', $pessoasCargo['Pessoa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pessoasCargo['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $pessoasCargo['Cargo']['id'])); ?>
		</td>
		<td><?php echo h($pessoasCargo['PessoasCargo']['created']); ?>&nbsp;</td>
		<td><?php echo h($pessoasCargo['PessoasCargo']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pessoasCargo['PessoasCargo']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pessoasCargo['PessoasCargo']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pessoasCargo['PessoasCargo']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pessoasCargo['PessoasCargo']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pessoasCargo['PessoasCargo']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
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
			'PessoasCargo.id'=>ucfirst(__('id')),
			'PessoasCargo.pessoa_id'=>ucfirst(__('pessoa_id')),
			'PessoasCargo.cargo_id'=>ucfirst(__('cargo_id')),
			'PessoasCargo.created'=>ucfirst(__('created')),
			'PessoasCargo.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>