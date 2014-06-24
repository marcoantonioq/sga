<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Pasto'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('retiro_id', ucfirst(__('retiro_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('tipo', ucfirst(__('tipo'))); ?></th>
			<th><?php echo $this->Paginator->sort('datainclusao', ucfirst(__('datainclusao'))); ?></th>
			<th><?php echo $this->Paginator->sort('area', ucfirst(__('area'))); ?></th>
			<th><?php echo $this->Paginator->sort('topografia', ucfirst(__('topografia'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_count', ucfirst(__('bovino_count'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Pasto}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pastos as $pasto): ?>
	<tr>
		<td><?php echo h($pasto['Pasto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pasto['Retiro']['nome'], array('controller' => 'retiros', 'action' => 'view', $pasto['Retiro']['id'])); ?>
		</td>
		<td><?php echo h($pasto['Pasto']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pasto['Pasto']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($pasto['Pasto']['datainclusao']); ?>&nbsp;</td>
		<td><?php echo h($pasto['Pasto']['area']); ?>&nbsp;</td>
		<td><?php echo h($pasto['Pasto']['topografia']); ?>&nbsp;</td>
		<td><?php echo h($pasto['Pasto']['bovino_count']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pasto['Pasto']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pasto['Pasto']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pasto['Pasto']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pasto['Pasto']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pasto['Pasto']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Retiros', 
			'bended_arrow_left',
			array('controller' => 'retiros', 'action' => 'index'),
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
			'Pasto.id'=>ucfirst(__('id')),
			'Retiro.nome'=>ucfirst(__('retiro_id')),
			'Pasto.nome'=>ucfirst(__('nome')),
			'Pasto.tipo'=>ucfirst(__('tipo')),
			'Pasto.datainclusao'=>ucfirst(__('datainclusao')),
			'Pasto.area'=>ucfirst(__('area')),
			'Pasto.topografia'=>ucfirst(__('topografia')),
			'Pasto.tipoaguado'=>ucfirst(__('tipoaguado')),
			'Pasto.bovino_count'=>ucfirst(__('bovino_count')),
			'Pasto.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>