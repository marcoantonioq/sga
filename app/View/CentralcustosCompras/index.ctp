<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'CentralcustosCompra'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('centralcusto_id', ucfirst(__('centralcusto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('compra_id', ucfirst(__('compra_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{CentralcustosCompra}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($centralcustosCompras as $centralcustosCompra): ?>
	<tr>
		<td><?php echo h($centralcustosCompra['CentralcustosCompra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($centralcustosCompra['Centralcusto']['id'], array('controller' => 'centralcustos', 'action' => 'view', $centralcustosCompra['Centralcusto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($centralcustosCompra['Compra']['nome'], array('controller' => 'compras', 'action' => 'view', $centralcustosCompra['Compra']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $centralcustosCompra['CentralcustosCompra']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $centralcustosCompra['CentralcustosCompra']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $centralcustosCompra['CentralcustosCompra']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $centralcustosCompra['CentralcustosCompra']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$centralcustosCompra['CentralcustosCompra']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Centralcustos', 
			'bended_arrow_left',
			array('controller' => 'centralcustos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Compras', 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'CentralcustosCompra.id'=>ucfirst(__('id')),
			'CentralcustosCompra.centralcusto_id'=>ucfirst(__('centralcusto_id')),
			'CentralcustosCompra.compra_id'=>ucfirst(__('compra_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>