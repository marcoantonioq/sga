<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'BovinosRaca'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('raca_id', ucfirst(__('raca_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('percentual', ucfirst(__('percentual'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{BovinosRaca}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($bovinosRacas as $bovinosRaca): ?>
	<tr>
		<td><?php echo h($bovinosRaca['BovinosRaca']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bovinosRaca['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $bovinosRaca['Bovino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($bovinosRaca['Raca']['nome'], array('controller' => 'racas', 'action' => 'view', $bovinosRaca['Raca']['id'])); ?>
		</td>
		<td><?php echo h($bovinosRaca['BovinosRaca']['percentual']); ?>&nbsp;</td>
		<td><?php echo h($bovinosRaca['BovinosRaca']['created']); ?>&nbsp;</td>
		<td><?php echo h($bovinosRaca['BovinosRaca']['updated']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $bovinosRaca['BovinosRaca']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $bovinosRaca['BovinosRaca']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $bovinosRaca['BovinosRaca']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $bovinosRaca['BovinosRaca']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$bovinosRaca['BovinosRaca']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Racas', 
			'bended_arrow_left',
			array('controller' => 'racas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'BovinosRaca.id'=>ucfirst(__('id')),
			'BovinosRaca.bovino_id'=>ucfirst(__('bovino_id')),
			'BovinosRaca.raca_id'=>ucfirst(__('raca_id')),
			'BovinosRaca.percentual'=>ucfirst(__('percentual')),
			'BovinosRaca.created'=>ucfirst(__('created')),
			'BovinosRaca.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>