<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Quote'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('contrato', ucfirst(__('contrato'))); ?></th>
			<th><?php echo $this->Paginator->sort('ultimo', ucfirst(__('ultimo'))); ?></th>
			<th><?php echo $this->Paginator->sort('variacao', ucfirst(__('variacao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Quote}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($quotes as $quote): ?>
	<tr>
		<td><?php echo h($quote['Quote']['id']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['nome']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['contrato']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['ultimo']); ?>&nbsp;</td>
		<td><?php echo h($quote['Quote']['variacao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $quote['Quote']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $quote['Quote']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $quote['Quote']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $quote['Quote']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$quote['Quote']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Quote.id'=>ucfirst(__('id')),
			'Quote.nome'=>ucfirst(__('nome')),
			'Quote.contrato'=>ucfirst(__('contrato')),
			'Quote.ultimo'=>ucfirst(__('ultimo')),
			'Quote.variacao'=>ucfirst(__('variacao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>