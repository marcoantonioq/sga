<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Semem'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('pai', ucfirst(__('pai'))); ?></th>
			<th><?php echo $this->Paginator->sort('mae', ucfirst(__('mae'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('origem', ucfirst(__('origem'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Semem}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($semems as $semem): ?>
	<tr>
		<td><?php echo h($semem['Semem']['id']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['nome']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['pai']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['mae']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['data']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['origem']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['created']); ?>&nbsp;</td>
		<td><?php echo h($semem['Semem']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $semem['Semem']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $semem['Semem']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $semem['Semem']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $semem['Semem']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$semem['Semem']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Ics', 
			'bended_arrow_left',
			array('controller' => 'ics', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Semem.id'=>ucfirst(__('id')),
			'Semem.nome'=>ucfirst(__('nome')),
			'Semem.pai'=>ucfirst(__('pai')),
			'Semem.mae'=>ucfirst(__('mae')),
			'Semem.data'=>ucfirst(__('data')),
			'Semem.origem'=>ucfirst(__('origem')),
			'Semem.created'=>ucfirst(__('created')),
			'Semem.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>