<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Pagamento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('centralcusto_id', ucfirst(__('centralcusto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('valor', ucfirst(__('valor'))); ?></th>
			<th><?php echo $this->Paginator->sort('pagamentoscol', ucfirst(__('pagamentoscol'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('vencimento', ucfirst(__('vencimento'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Pagamento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pagamentos as $pagamento): ?>
	<tr>
		<td><?php echo h($pagamento['Pagamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pagamento['Centralcusto']['mes'], array('controller' => 'centralcustos', 'action' => 'view', $pagamento['Centralcusto']['id'])); ?>
		</td>
		<td><?php echo h($pagamento['Pagamento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['valor']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['pagamentoscol']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['data']); ?>&nbsp;</td>
		<td><?php echo h($pagamento['Pagamento']['vencimento']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pagamento['Pagamento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pagamento['Pagamento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pagamento['Pagamento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pagamento['Pagamento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pagamento['Pagamento']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

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
			'Pagamento.id'=>ucfirst(__('id')),
			'Pagamento.centralcusto_id'=>ucfirst(__('centralcusto_id')),
			'Pagamento.nome'=>ucfirst(__('nome')),
			'Pagamento.valor'=>ucfirst(__('valor')),
			'Pagamento.pagamentoscol'=>ucfirst(__('pagamentoscol')),
			'Pagamento.data'=>ucfirst(__('data')),
			'Pagamento.vencimento'=>ucfirst(__('vencimento')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>