<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Pesagen'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('peso', ucfirst(__('peso'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('pasto_id', ucfirst(__('pasto_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th><?php echo $this->Paginator->sort('title', ucfirst(__('title'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Pesagen}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($pesagens as $pesagen): ?>
	<tr>
		<td><?php echo h($pesagen['Pesagen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pesagen['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $pesagen['Bovino']['id'])); ?>
		</td>
		<td><?php echo h($pesagen['Pesagen']['peso']); ?>&nbsp;</td>
		<td><?php echo h($pesagen['Pesagen']['data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pesagen['Pasto']['id'], array('controller' => 'pastos', 'action' => 'view', $pesagen['Pasto']['id'])); ?>
		</td>
		<td><?php echo h($pesagen['Pesagen']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($pesagen['Pesagen']['title']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $pesagen['Pesagen']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $pesagen['Pesagen']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $pesagen['Pesagen']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $pesagen['Pesagen']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$pesagen['Pesagen']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pastos', 
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Pesagen.id'=>ucfirst(__('id')),
			'Pesagen.bovino_id'=>ucfirst(__('bovino_id')),
			'Pesagen.peso'=>ucfirst(__('peso')),
			'Pesagen.data'=>ucfirst(__('data')),
			'Pesagen.pasto_id'=>ucfirst(__('pasto_id')),
			'Pesagen.descricao'=>ucfirst(__('descricao')),
			'Pesagen.title'=>ucfirst(__('title')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>