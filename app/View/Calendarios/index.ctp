<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Calendario'); ?>


<?php echo $this->start('outros'); ?>
	<?php 
		$script="<script>
		$(document).ready(function() {	
			var date = new Date();
			var d = date.getDate();
			var m = date.getMonth();
			var y = date.getFullYear();
			
			$('#calendar').fullCalendar({
				editable: true,
				events: [";
	 ?>

	<?php foreach ($calendarios as $calendario): ?>
		<?php 
			$script .= "
					{title: '".$calendario['Calendario']['titulo']."', start: new Date(".date('Y, m, d', strtotime('-1 month', strtotime($calendario['Calendario']['inicio']))).")},";
		 ?>
	<?php endforeach; ?>
	<?php 
	$script .= "

	]
			});		
		});
	</script>";
	echo $script;
?>

	<div id='calendar' class="">
		
	</div>

<?php echo $this->end(); ?>


<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fazenda_id', 'Fazenda'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo', 'Título'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio', ucfirst(__('inicio'))); ?></th>
			<th><?php echo $this->Paginator->sort('termino', ucfirst(__('termino'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
			<th id='masterCh' class='ch'>
				<input type='checkbox' name='{Calendario}' value='all' class='styled' />
			</th>
	</tr>
</thead>
	<?php foreach ($calendarios as $calendario): ?>
	<tr>
		<td><?php echo h($calendario['Calendario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($calendario['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $calendario['Fazenda']['id'])); ?>
		</td>
	<td><?php echo h($calendario['Calendario']['titulo']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($calendario['Calendario']['inicio']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($calendario['Calendario']['termino']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $calendario['Calendario']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $calendario['Calendario']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $calendario['Calendario']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $calendario['Calendario']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$calendario['Calendario']['id'], array( 'class'=>'styled' ));?>
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
		echo $this->Link->icon('Categoria calendários', 
			'bended_arrow_left',
			array('controller' => 'categoriacalendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Calendario.id'=>ucfirst(__('id')),
			'Calendario.fazenda_id'=>ucfirst(__('fazenda_id')),
			'Calendario.titulo'=>ucfirst(__('titulo')),
			'Calendario.inicio'=>ucfirst(__('inicio')),
			'Calendario.termino'=>ucfirst(__('termino')),
			'Calendario.observacoes'=>ucfirst(__('observacoes')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>