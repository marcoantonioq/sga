<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Evento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('user_id', ucfirst(__('user_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('status', ucfirst(__('status'))); ?></th>
			<th><?php echo $this->Paginator->sort('categoriasevento_id', ucfirst(__('categoriasevento_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('nome', ucfirst(__('nome'))); ?></th>
			<th><?php echo $this->Paginator->sort('datainicial', ucfirst(__('datainicial'))); ?></th>
			<th><?php echo $this->Paginator->sort('datafinal', ucfirst(__('datafinal'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Evento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($eventos as $evento): ?>
	<tr>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['User']['username'], array('controller' => 'users', 'action' => 'view', $evento['User']['id'])); ?>
		</td>
		<td><?php echo $evento['Evento']['status']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($evento['Categoriasevento']['nome'], array('controller' => 'categoriaseventos', 'action' => 'view', $evento['Categoriasevento']['id'])); ?>
		</td>
		<td><?php echo h($evento['Evento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['datainicial']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['datafinal']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['created']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $evento['Evento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $evento['Evento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $evento['Evento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $evento['Evento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$evento['Evento']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
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


		<?php 
		echo $this->Link->icon('Categoriaseventos', 
			'bended_arrow_left',
			array('controller' => 'categoriaseventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Ics', 
			'bended_arrow_left',
			array('controller' => 'ics', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Doencas', 
			'bended_arrow_left',
			array('controller' => 'doencas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	
	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Evento.id'=>ucfirst(__('id')),
			'Evento.user_id'=>ucfirst(__('user_id')),
			'Evento.status'=>ucfirst(__('status')),
			'Evento.categoriasevento_id'=>ucfirst(__('categoriasevento_id')),
			'Evento.nome'=>ucfirst(__('nome')),
			'Evento.datainicial'=>ucfirst(__('datainicial')),
			'Evento.alerta'=>ucfirst(__('alerta')),
			'Evento.datafinal'=>ucfirst(__('datafinal')),
			'Evento.datamax'=>ucfirst(__('datamax')),
			'Evento.secagens'=>ucfirst(__('secagens')),
			'Evento.iniciosecagem'=>ucfirst(__('iniciosecagem')),
			'Evento.altura'=>ucfirst(__('altura')),
			'Evento.pesagem'=>ucfirst(__('pesagem')),
			'Evento.desaleitamento'=>ucfirst(__('desaleitamento')),
			'Evento.cascosnormais'=>ucfirst(__('cascosnormais')),
			'Evento.aptas'=>ucfirst(__('aptas')),
			'Evento.leitepesagens'=>ucfirst(__('leitepesagens')),
			'Evento.escore'=>ucfirst(__('escore')),
			'Evento.ic_id'=>ucfirst(__('ic_id')),
			'Evento.descricao'=>ucfirst(__('descricao')),
			'Evento.diagnostico'=>ucfirst(__('diagnostico')),
			'Evento.lancarcalendario'=>ucfirst(__('lancarcalendario')),
			'Evento.created'=>ucfirst(__('created')),
			'Evento.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>