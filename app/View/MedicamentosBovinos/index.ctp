<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'MedicamentosBovino'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('medicamento_id', ucfirst(__('medicamento_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes', ucfirst(__('observacoes'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{MedicamentosBovino}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($medicamentosBovinos as $medicamentosBovino): ?>
	<tr>
		<td><?php echo h($medicamentosBovino['MedicamentosBovino']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medicamentosBovino['Medicamento']['nome'], array('controller' => 'medicamentos', 'action' => 'view', $medicamentosBovino['Medicamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($medicamentosBovino['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $medicamentosBovino['Bovino']['id'])); ?>
		</td>
		<td><?php echo h($medicamentosBovino['MedicamentosBovino']['observacoes']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $medicamentosBovino['MedicamentosBovino']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $medicamentosBovino['MedicamentosBovino']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $medicamentosBovino['MedicamentosBovino']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $medicamentosBovino['MedicamentosBovino']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$medicamentosBovino['MedicamentosBovino']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Medicamentos', 
			'bended_arrow_left',
			array('controller' => 'medicamentos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


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
			'MedicamentosBovino.id'=>ucfirst(__('id')),
			'MedicamentosBovino.medicamento_id'=>ucfirst(__('medicamento_id')),
			'MedicamentosBovino.bovino_id'=>ucfirst(__('bovino_id')),
			'MedicamentosBovino.observacoes'=>ucfirst(__('observacoes')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>