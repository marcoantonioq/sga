<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'BovinosEvento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{BovinosEvento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($bovinosEventos as $bovinosEvento): ?>
	<tr>
		<td><?php echo h($bovinosEvento['BovinosEvento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bovinosEvento['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $bovinosEvento['Bovino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bovinosEvento['Evento']['nome'], array('controller' => 'eventos', 'action' => 'view', $bovinosEvento['Evento']['id'])); ?>
		</td>
		<td><?php echo h($bovinosEvento['BovinosEvento']['created']); ?>&nbsp;</td>
		<td><?php echo h($bovinosEvento['BovinosEvento']['updated']); ?>&nbsp;</td>
		<td><?php echo h($bovinosEvento['BovinosEvento']['status']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $bovinosEvento['BovinosEvento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $bovinosEvento['BovinosEvento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $bovinosEvento['BovinosEvento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $bovinosEvento['BovinosEvento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$bovinosEvento['BovinosEvento']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Eventos', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'BovinosEvento.id'=>'id',
			'BovinosEvento.bovino_id'=>'bovino_id',
			'BovinosEvento.evento_id'=>'evento_id',
			'BovinosEvento.created'=>'created',
			'BovinosEvento.updated'=>'updated',
			'BovinosEvento.status'=>'status',
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>