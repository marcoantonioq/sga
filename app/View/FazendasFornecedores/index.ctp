<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'FazendasFornecedore'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('int', ucfirst(__('int'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fornecedore_id', ucfirst(__('fornecedore_id'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{FazendasFornecedore}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($fazendasFornecedores as $fazendasFornecedore): ?>
	<tr>
		<td><?php echo h($fazendasFornecedore['FazendasFornecedore']['int']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fazendasFornecedore['Fazenda']['id'], array('controller' => 'fazendas', 'action' => 'view', $fazendasFornecedore['Fazenda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fazendasFornecedore['Fornecedore']['id'], array('controller' => 'fornecedores', 'action' => 'view', $fazendasFornecedore['Fornecedore']['id'])); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fazendasFornecedore['FazendasFornecedore']['int']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fazendasFornecedore['FazendasFornecedore']['int']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fazendasFornecedore['FazendasFornecedore']['int']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fazendasFornecedore['FazendasFornecedore']['int'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fazendasFornecedore['FazendasFornecedore']['int'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Fornecedores', 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'FazendasFornecedore.int'=>ucfirst(__('int')),
			'FazendasFornecedore.fazenda_id'=>ucfirst(__('fazenda_id')),
			'FazendasFornecedore.fornecedore_id'=>ucfirst(__('fornecedore_id')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>