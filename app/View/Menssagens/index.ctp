<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Menssagen'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('titulo', ucfirst(__('titulo'))); ?></th>
			<th><?php echo $this->Paginator->sort('conteudo', ucfirst(__('conteudo'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Menssagen}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($menssagens as $menssagen): ?>
	<tr>
		<td><?php echo h($menssagen['Menssagen']['id']); ?>&nbsp;</td>
		<td><?php echo h($menssagen['Menssagen']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($menssagen['Menssagen']['conteudo']); ?>&nbsp;</td>
		<td><?php echo h($menssagen['Menssagen']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $menssagen['Menssagen']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $menssagen['Menssagen']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $menssagen['Menssagen']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $menssagen['Menssagen']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$menssagen['Menssagen']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Menssagen.id'=>ucfirst(__('id')),
			'Menssagen.titulo'=>ucfirst(__('titulo')),
			'Menssagen.conteudo'=>ucfirst(__('conteudo')),
			'Menssagen.created'=>ucfirst(__('created')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>