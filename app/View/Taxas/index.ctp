<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Taxa'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('quote_id', ucfirst(__('quote_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('valores', ucfirst(__('valores'))); ?></th>
			<th><?php echo $this->Paginator->sort('date', ucfirst(__('date'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Taxa}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($taxas as $taxa): ?>
	<tr>
		<td><?php echo h($taxa['Taxa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($taxa['Quote']['id'], array('controller' => 'quotes', 'action' => 'view', $taxa['Quote']['id'])); ?>
		</td>
		<td><?php echo h($taxa['Taxa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($taxa['Taxa']['valores']); ?>&nbsp;</td>
		<td><?php echo h($taxa['Taxa']['date']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $taxa['Taxa']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $taxa['Taxa']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $taxa['Taxa']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $taxa['Taxa']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$taxa['Taxa']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Quotes', 
			'bended_arrow_left',
			array('controller' => 'quotes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Taxa.id'=>ucfirst(__('id')),
			'Taxa.quote_id'=>ucfirst(__('quote_id')),
			'Taxa.nome'=>ucfirst(__('nome')),
			'Taxa.valores'=>ucfirst(__('valores')),
			'Taxa.date'=>ucfirst(__('date')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>