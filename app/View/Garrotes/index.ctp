<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Garrote'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('datanascimento', ucfirst(__('datanascimento'))); ?></th>
			<th><?php echo $this->Paginator->sort('totalpesagem', ucfirst(__('totalpesagem'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Garrote}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php 
		$total['totalpesagem'] = 0;
	 ?>

	<?php foreach ($garrotes as $garrote): ?>
	<tr>
		<td><?php echo h($garrote['Garrote']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($garrote['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $garrote['Bovino']['id'])); ?>
		</td>
		<td><?php echo h($garrote['Garrote']['nome']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($garrote['Garrote']['datanascimento']); ?>&nbsp;</td>
		<td><?php echo h($garrote['Garrote']['totalpesagem']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($garrote['Garrote']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $garrote['Garrote']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $garrote['Garrote']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $garrote['Garrote']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $garrote['Garrote']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$garrote['Garrote']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>


	<?php
		// $total[$garrote['Garrote']['nome']] += $garrote['Garrote']['totalpesagem'];
		$total['totalpesagem'] += $garrote['Garrote']['totalpesagem'];
	 ?>	

<?php endforeach; ?>

</table>

<!-- <div class="relatorio"> -->

<table class='responsive table table-bordered' id='checkAll'>
	<caption>Resultados</caption>
	<thead>
		<tr>
			<th>Total pesagem leite</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $total['totalpesagem'] ?></td>
		</tr>
	</tbody>
</table>
<!-- </div> -->

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Garrote.id'=>ucfirst(__('id')),
			'Garrote.bovino_id'=>ucfirst(__('bovino_id')),
			'Garrote.nome'=>ucfirst(__('nome')),
			'Garrote.datanascimento'=>ucfirst(__('datanascimento')),
			'Garrote.totalpesagem'=>ucfirst(__('totalpesagem')),
			'Garrote.observacoes'=>ucfirst(__('observacoes')),
			'Garrote.created'=>ucfirst(__('created')),
			'Garrote.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>