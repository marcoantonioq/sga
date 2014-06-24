<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Meteorologico'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('umidademin', ucfirst(__('umidademin'))); ?></th>
			<th><?php echo $this->Paginator->sort('umidademax', ucfirst(__('umidademax'))); ?></th>
			<th><?php echo $this->Paginator->sort('chuva', ucfirst(__('chuva'))); ?></th>
			<th><?php echo $this->Paginator->sort('temperaturamin', ucfirst(__('temperaturamin'))); ?></th>
			<th><?php echo $this->Paginator->sort('temperaturamax', ucfirst(__('temperaturamax'))); ?></th>
			<th><?php echo $this->Paginator->sort('observacoes', ucfirst(__('observacoes'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Meteorologico}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($meteorologicos as $meteorologico): ?>
	<tr>
		<td><?php echo h($meteorologico['Meteorologico']['id']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['data']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['umidademin']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['umidademax']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['chuva']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['temperaturamin']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['temperaturamax']); ?>&nbsp;</td>
		<td><?php echo h($meteorologico['Meteorologico']['observacoes']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $meteorologico['Meteorologico']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $meteorologico['Meteorologico']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $meteorologico['Meteorologico']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $meteorologico['Meteorologico']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$meteorologico['Meteorologico']['id'], array( 'class'=>'styled' ));?>
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
			'Meteorologico.id'=>ucfirst(__('id')),
			'Meteorologico.data'=>ucfirst(__('data')),
			'Meteorologico.umidademin'=>ucfirst(__('umidademin')),
			'Meteorologico.umidademax'=>ucfirst(__('umidademax')),
			'Meteorologico.chuva'=>ucfirst(__('chuva')),
			'Meteorologico.temperaturamin'=>ucfirst(__('temperaturamin')),
			'Meteorologico.temperaturamax'=>ucfirst(__('temperaturamax')),
			'Meteorologico.observacoes'=>ucfirst(__('observacoes')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>