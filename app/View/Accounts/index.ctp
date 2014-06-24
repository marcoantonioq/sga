<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Account'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('banco', ucfirst(__('banco'))); ?></th>
			<th><?php echo $this->Paginator->sort('agencia', ucfirst(__('agencia'))); ?></th>
			<th><?php echo $this->Paginator->sort('numero', ucfirst(__('numero'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Account}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($accounts as $account): ?>
	<tr>
		<td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($account['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $account['Fazenda']['id'])); ?>
		</td>
		<td><?php echo h($account['Account']['banco']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['agencia']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['numero']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['descricao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $account['Account']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $account['Account']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $account['Account']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $account['Account']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$account['Account']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

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
			'Account.id'=>ucfirst(__('id')),
			'Fazenda.nome'=>ucfirst(__('fazenda_id')),
			'Account.banco'=>ucfirst(__('banco')),
			'Account.agencia'=>ucfirst(__('agencia')),
			'Account.numero'=>ucfirst(__('numero')),
			'Account.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>