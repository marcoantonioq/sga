<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Fabricante'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('telefone', ucfirst(__('telefone'))); ?></th>
			<th><?php echo $this->Paginator->sort('contato', ucfirst(__('contato'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Fabricante}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($fabricantes as $fabricante): ?>
	<tr>
		<td><?php echo h($fabricante['Fabricante']['id']); ?>&nbsp;</td>
		<td><?php echo h($fabricante['Fabricante']['nome']); ?>&nbsp;</td>
		<td><?php echo h($fabricante['Fabricante']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($fabricante['Fabricante']['contato']); ?>&nbsp;</td>
		<td><?php echo h($fabricante['Fabricante']['descricao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fabricante['Fabricante']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fabricante['Fabricante']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fabricante['Fabricante']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fabricante['Fabricante']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fabricante['Fabricante']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Produtos', 
			'bended_arrow_left',
			array('controller' => 'produtos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Fabricante.id'=>ucfirst(__('id')),
			'Fabricante.nome'=>ucfirst(__('nome')),
			'Fabricante.telefone'=>ucfirst(__('telefone')),
			'Fabricante.contato'=>ucfirst(__('contato')),
			'Fabricante.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>