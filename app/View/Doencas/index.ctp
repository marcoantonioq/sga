<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Doenca'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Doenca}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($doencas as $doenca): ?>
	<tr>
		<td><?php echo h($doenca['Doenca']['id']); ?>&nbsp;</td>
		<td><?php echo h($doenca['Doenca']['nome']); ?>&nbsp;</td>
		<td><?php echo h($doenca['Doenca']['descricao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $doenca['Doenca']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $doenca['Doenca']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $doenca['Doenca']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $doenca['Doenca']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$doenca['Doenca']['id'], array( 'class'=>'styled' ));?>
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


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Doenca.id'=>ucfirst(__('id')),
			'Doenca.nome'=>ucfirst(__('nome')),
			'Doenca.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>