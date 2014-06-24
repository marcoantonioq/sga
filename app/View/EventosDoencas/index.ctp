<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'EventosDoenca'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id', ucfirst(__('evento_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('doenca_id', ucfirst(__('doenca_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostico', ucfirst(__('diagnostico'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes', ucfirst(__('observacoes'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{EventosDoenca}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($eventosDoencas as $eventosDoenca): ?>
	<tr>
		<td><?php echo h($eventosDoenca['EventosDoenca']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eventosDoenca['Evento']['nome'], array('controller' => 'eventos', 'action' => 'view', $eventosDoenca['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eventosDoenca['Doenca']['id'], array('controller' => 'doencas', 'action' => 'view', $eventosDoenca['Doenca']['id'])); ?>
		</td>
		<td><?php echo h($eventosDoenca['EventosDoenca']['diagnostico']); ?>&nbsp;</td>
		<td><?php echo h($eventosDoenca['EventosDoenca']['created']); ?>&nbsp;</td>
		<td><?php echo h($eventosDoenca['EventosDoenca']['updated']); ?>&nbsp;</td>
		<td><?php echo h($eventosDoenca['EventosDoenca']['observacoes']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $eventosDoenca['EventosDoenca']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $eventosDoenca['EventosDoenca']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $eventosDoenca['EventosDoenca']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $eventosDoenca['EventosDoenca']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$eventosDoenca['EventosDoenca']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Eventos', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Doencas', 
			'bended_arrow_left',
			array('controller' => 'doencas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'EventosDoenca.id'=>ucfirst(__('id')),
			'EventosDoenca.evento_id'=>ucfirst(__('evento_id')),
			'EventosDoenca.doenca_id'=>ucfirst(__('doenca_id')),
			'EventosDoenca.diagnostico'=>ucfirst(__('diagnostico')),
			'EventosDoenca.created'=>ucfirst(__('created')),
			'EventosDoenca.updated'=>ucfirst(__('updated')),
			'EventosDoenca.observacoes'=>ucfirst(__('observacoes')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>