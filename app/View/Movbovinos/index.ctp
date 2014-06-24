<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Movbovino'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('pasto_id', ucfirst(__('pasto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('pastoanterior', ucfirst(__('pastoanterior'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Movbovino}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($movbovinos as $movbovino): ?>
	<tr>
		<td><?php echo h($movbovino['Movbovino']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movbovino['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $movbovino['Bovino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($movbovino['Pasto']['id'], array('controller' => 'pastos', 'action' => 'view', $movbovino['Pasto']['id'])); ?>
		</td>
		<td><?php echo h($movbovino['Movbovino']['pastoanterior']); ?>&nbsp;</td>
		<td><?php echo h($movbovino['Movbovino']['data']); ?>&nbsp;</td>
		<td><?php echo h($movbovino['Movbovino']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $movbovino['Movbovino']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $movbovino['Movbovino']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $movbovino['Movbovino']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $movbovino['Movbovino']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$movbovino['Movbovino']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pastos', 
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Movbovino.id'=>ucfirst(__('id')),
			'Movbovino.bovino_id'=>ucfirst(__('bovino_id')),
			'Movbovino.pasto_id'=>ucfirst(__('pasto_id')),
			'Movbovino.pastoanterior'=>ucfirst(__('pastoanterior')),
			'Movbovino.data'=>ucfirst(__('data')),
			'Movbovino.created'=>ucfirst(__('created')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>