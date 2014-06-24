<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Sexo'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_count', ucfirst(__('pessoa_count'))); ?></th>
			<th><?php echo $this->Paginator->sort('user_count', ucfirst(__('user_count'))); ?></th>
			<th><?php echo $this->Paginator->sort('user_disable', ucfirst(__('user_disable'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Sexo}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($sexos as $sexo): ?>
	<tr>
		<td><?php echo h($sexo['Sexo']['id']); ?>&nbsp;</td>
		<td><?php echo h($sexo['Sexo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($sexo['Sexo']['pessoa_count']); ?>&nbsp;</td>
		<td><?php echo h($sexo['Sexo']['user_count']); ?>&nbsp;</td>
		<td><?php echo h($sexo['Sexo']['user_disable']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $sexo['Sexo']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $sexo['Sexo']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $sexo['Sexo']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $sexo['Sexo']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$sexo['Sexo']['id'], array( 'class'=>'styled' ));?>
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


		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Sexo.id'=>ucfirst(__('id')),
			'Sexo.nome'=>ucfirst(__('nome')),
			'Sexo.pessoa_count'=>ucfirst(__('pessoa_count')),
			'Sexo.user_count'=>ucfirst(__('user_count')),
			'Sexo.user_disable'=>ucfirst(__('user_disable')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>