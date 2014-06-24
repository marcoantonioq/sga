<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'CentralcustosVenda'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('centralcusto_id', ucfirst(__('centralcusto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('venda_id', ucfirst(__('venda_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{CentralcustosVenda}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($centralcustosVendas as $centralcustosVenda): ?>
	<tr>
		<td><?php echo h($centralcustosVenda['CentralcustosVenda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($centralcustosVenda['Centralcusto']['id'], array('controller' => 'centralcustos', 'action' => 'view', $centralcustosVenda['Centralcusto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($centralcustosVenda['Venda']['nome'], array('controller' => 'vendas', 'action' => 'view', $centralcustosVenda['Venda']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $centralcustosVenda['CentralcustosVenda']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $centralcustosVenda['CentralcustosVenda']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $centralcustosVenda['CentralcustosVenda']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $centralcustosVenda['CentralcustosVenda']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$centralcustosVenda['CentralcustosVenda']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Vendas', 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'CentralcustosVenda.id'=>ucfirst(__('id')),
			'CentralcustosVenda.centralcusto_id'=>ucfirst(__('centralcusto_id')),
			'CentralcustosVenda.venda_id'=>ucfirst(__('venda_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>