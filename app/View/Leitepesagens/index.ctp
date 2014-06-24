<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Leitepesagen'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('bovino_id', ucfirst(__('bovino_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('ordenha_id', ucfirst(__('ordenha_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('peso', ucfirst(__('peso'))); ?></th>
			<th><?php echo $this->Paginator->sort('data', ucfirst(__('data'))); ?></th>
			<th><?php echo $this->Paginator->sort('escore', ucfirst(__('escore'))); ?></th>
			<th><?php echo $this->Paginator->sort('descricao', ucfirst(__('descricao'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Leitepesagen}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($leitepesagens as $leitepesagen): ?>
	<tr>
		<td><?php echo h($leitepesagen['Leitepesagen']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($leitepesagen['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $leitepesagen['Bovino']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($leitepesagen['Ordenha']['local'], array('controller' => 'ordenhas', 'action' => 'view', $leitepesagen['Ordenha']['id'])); ?>
		</td>
		<td>
			<?php echo h($leitepesagen['Leitepesagen']['peso']); ?>&nbsp;
		</td>
		<td><?php echo $this->Date->datetime($leitepesagen['Leitepesagen']['data']); ?>&nbsp;</td>
		<td><?php echo h($leitepesagen['Leitepesagen']['escore']); ?>&nbsp;</td>
		<td><?php echo h($leitepesagen['Leitepesagen']['descricao']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $leitepesagen['Leitepesagen']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $leitepesagen['Leitepesagen']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $leitepesagen['Leitepesagen']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $leitepesagen['Leitepesagen']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$leitepesagen['Leitepesagen']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>

	<?php
		$total[$leitepesagen['Bovino']['id']]['Leitepesagen'] = "";
		$total[$leitepesagen['Bovino']['id']]['nome'] = $leitepesagen['Bovino']['nome'];
		$total[$leitepesagen['Bovino']['id']]['escore'][] = $leitepesagen['Leitepesagen']['escore'];
		$total[$leitepesagen['Bovino']['id']]['Leitepesagen'][] = $leitepesagen['Leitepesagen']['peso'];
	 ?>	

<?php endforeach; ?>
</table>

<!-- <div class="relatorio"> -->
<?php if (!empty($total)): ?>
<table class='responsive table table-bordered' id='checkAll'>
	<caption>Resultados</caption>
	<thead>
		<tr>
			<th>Bovinos</th>
			<th>Total pesagem leite</th>
			<th>Escore (min)</th>
			<th>Escore (max)</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($total as $id => $bovino): ?>
			<tr>
				<td>
					<?php echo $bovino['nome']; ?>
				</td>
				<td>
					<?php echo array_sum($bovino['Leitepesagen']); ?>
				</td>
				<td>					
					<?php 
						$min = array_filter($bovino['escore']);
						echo (!empty($min)) ? min($min) : "S/N"; 
					?>
				</td>
				<td>
					<?php 
						$max = array_filter($bovino['escore']);
						echo (!empty($max)) ? max($max) : "S/N"; 
					 ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php endif ?>
<!-- </div> -->




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
		echo $this->Link->icon('Ordenhas', 
			'bended_arrow_left',
			array('controller' => 'ordenhas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Leitepesagen.id'=>ucfirst(__('id')),
			'Bovino.nome'=>ucfirst('bovino'),
			'Ordenha.local'=>ucfirst('ordenha'),
			'Leitepesagen.peso'=>ucfirst(__('peso')),
			'Leitepesagen.data'=>ucfirst(__('data')),
			'Leitepesagen.escore'=>ucfirst(__('escore')),
			'Leitepesagen.descricao'=>ucfirst(__('descricao')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>