<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Medicamento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fabricante_id', ucfirst(__('fabricante_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('categoria', ucfirst(__('categoria'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Medicamento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($medicamentos as $medicamento): ?>
	<tr>
		<td><?php echo h($medicamento['Medicamento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($medicamento['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $medicamento['Fazenda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($medicamento['Fabricante']['nome'], array('controller' => 'fabricantes', 'action' => 'view', $medicamento['Fabricante']['id'])); ?>
		</td>
		<td><?php echo h($medicamento['Medicamento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($medicamento['Medicamento']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($medicamento['Medicamento']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $medicamento['Medicamento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $medicamento['Medicamento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $medicamento['Medicamento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $medicamento['Medicamento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$medicamento['Medicamento']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Fabricantes', 
			'bended_arrow_left',
			array('controller' => 'fabricantes', 'action' => 'index'),
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
			'Medicamento.id'=>ucfirst(__('id')),
			'Medicamento.fazenda_id'=>ucfirst(__('fazenda_id')),
			'Medicamento.fabricante_id'=>ucfirst(__('fabricante_id')),
			'Medicamento.nome'=>ucfirst(__('nome')),
			'Medicamento.categoria'=>ucfirst(__('categoria')),
			'Medicamento.notafiscal'=>ucfirst(__('notafiscal')),
			'Medicamento.unidade'=>ucfirst(__('unidade')),
			'Medicamento.valor'=>ucfirst(__('valor')),
			'Medicamento.comprado'=>ucfirst(__('comprado')),
			'Medicamento.descricao'=>ucfirst(__('descricao')),
			'Medicamento.created'=>ucfirst(__('created')),
			'Medicamento.dose'=>ucfirst(__('dose')),
			'Medicamento.validade'=>ucfirst(__('validade')),
			'Medicamento.prescricao'=>ucfirst(__('prescricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>