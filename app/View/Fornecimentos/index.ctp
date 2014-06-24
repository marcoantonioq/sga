<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Fornecimento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('retiro_id', ucfirst(__('retiro_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('quantidade', ucfirst(__('quantidade'))); ?></th>
			<th><?php echo $this->Paginator->sort('preco', ucfirst(__('preco'))); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes', ucfirst(__('observacoes'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Fornecimento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php 
		$mes = array();
	 ?>

	<?php foreach ($fornecimentos as $fornecimento): ?>
	<tr>
		<td><?php echo h($fornecimento['Fornecimento']['id']); ?>&nbsp;</td>
		<td><?php echo h($fornecimento['Fornecimento']['nome']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fornecimento['Retiro']['nome'], array('controller' => 'retiros', 'action' => 'view', $fornecimento['Retiro']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Date->datetime($fornecimento['Fornecimento']['data']); ?>&nbsp;
		</td>
		<td><?php echo h($fornecimento['Fornecimento']['quantidade']); ?>&nbsp;</td>
		<td><?php echo h($fornecimento['Fornecimento']['preco']); ?>&nbsp;</td>
		<td><?php echo h($fornecimento['Fornecimento']['observacoes']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fornecimento['Fornecimento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fornecimento['Fornecimento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fornecimento['Fornecimento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fornecimento['Fornecimento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fornecimento['Fornecimento']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>

	<?php 
		$m = date('m-Y',strtotime($fornecimento['Fornecimento']['data']));
		$mes[$m] = (empty($mes[$m])) ? 0 : $mes[$m];
		$mes[$m] += ($fornecimento['Fornecimento']['quantidade'] * $fornecimento['Fornecimento']['preco']);
	?>
<?php endforeach; ?>
</table>

<!-- <div class="relatorio"> -->

<table class='responsive table table-bordered' id='checkAll'>
	<caption>Total fornecimento de leite (mês)</caption>
	<thead>
		<tr>
			<th>Mês</th>
			<th>Total fornecimento de leite</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($mes as $m => $total):?>
		<tr>
			<td><?php echo $m; ?></td>
			<td>R$ <?php echo $total; ?></td>
		</tr>
		<?php endforeach; ?>
		<tr>
			<th>Total:</span></th>
			<th>R$ <?php echo array_sum(array_values($mes)); ?> </th>
		</tr>
	</tbody>
</table>
<!-- </div> -->



<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Retiros', 
			'bended_arrow_left',
			array('controller' => 'retiros', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Fornecimento.id'=>ucfirst(__('id')),
			'Fornecimento.nome'=>ucfirst(__('nome')),
			'Fornecimento.retiro_id'=>ucfirst(__('retiro_id')),
			'Fornecimento.data'=>ucfirst(__('data')),
			'Fornecimento.quantidade'=>ucfirst(__('quantidade')),
			'Fornecimento.preco'=>ucfirst(__('preco')),
			'Fornecimento.observacoes'=>ucfirst(__('observacoes')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>