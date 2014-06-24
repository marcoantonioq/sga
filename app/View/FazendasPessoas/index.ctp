<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'FazendasPessoa'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', ucfirst(__('fazenda_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id', ucfirst(__('pessoa_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{FazendasPessoa}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($fazendasPessoas as $fazendasPessoa): ?>
	<tr>
		<td><?php echo h($fazendasPessoa['FazendasPessoa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($fazendasPessoa['Fazenda']['id'], array('controller' => 'fazendas', 'action' => 'view', $fazendasPessoa['Fazenda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($fazendasPessoa['Pessoa']['name'], array('controller' => 'pessoas', 'action' => 'view', $fazendasPessoa['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($fazendasPessoa['FazendasPessoa']['created']); ?>&nbsp;</td>
		<td><?php echo h($fazendasPessoa['FazendasPessoa']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $fazendasPessoa['FazendasPessoa']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $fazendasPessoa['FazendasPessoa']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $fazendasPessoa['FazendasPessoa']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $fazendasPessoa['FazendasPessoa']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$fazendasPessoa['FazendasPessoa']['id'], array( 'class'=>'styled' ));?>
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
			'FazendasPessoa.id'=>ucfirst(__('id')),
			'FazendasPessoa.fazenda_id'=>ucfirst(__('fazenda_id')),
			'FazendasPessoa.pessoa_id'=>ucfirst(__('pessoa_id')),
			'FazendasPessoa.created'=>ucfirst(__('created')),
			'FazendasPessoa.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>