<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Cargo'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('nome', 'Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('habilidade'); ?></th>
			<th><?php echo $this->Paginator->sort('diasalario', 'Dia salário'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Cargo}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($cargos as $cargo): ?>
	<tr>
		<td><?php echo h($cargo['Cargo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cargo['Cargo']['habilidade']); ?>&nbsp;</td>
		<td><?php echo h($cargo['Cargo']['diasalario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $cargo['Cargo']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $cargo['Cargo']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $cargo['Cargo']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $cargo['Cargo']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$cargo['Cargo']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Cargo.id'=>'id',
			'Cargo.nome'=>'nome',
			'Cargo.habilidade'=>'habilidade',
			'Cargo.salario'=>'salario',
			'Cargo.diasalario'=>'diasalario',
			'Cargo.pontos'=>'pontos',
			'Cargo.descricao'=>'descricao',
			'Cargo.updated'=>'updated',
			'Cargo.created'=>'created',
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>