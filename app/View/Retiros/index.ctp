<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Retiro'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Retiro}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($retiros as $retiro): ?>
	<tr>
		<td><?php echo h($retiro['Retiro']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($retiro['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $retiro['Fazenda']['id'])); ?>
		</td>
		<td><?php echo h($retiro['Retiro']['nome']); ?>&nbsp;</td>
		<td><?php echo h($retiro['Retiro']['created']); ?>&nbsp;</td>
		<td><?php echo h($retiro['Retiro']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $retiro['Retiro']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $retiro['Retiro']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $retiro['Retiro']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $retiro['Retiro']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$retiro['Retiro']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
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
			'Retiro.id'=>ucfirst(__('id')),
			'Fazenda.nome'=>ucfirst(__('fazenda_id')),
			'Retiro.nome'=>ucfirst(__('nome')),
			'Retiro.cod_ordenha'=>ucfirst(__('cod_ordenha')),
			'Retiro.descricao'=>ucfirst(__('descricao')),
			'Retiro.created'=>ucfirst(__('created')),
			'Retiro.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>