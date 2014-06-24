<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Calendario'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Calendario', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcalendarios' data-toggle='tab'><?php echo ucfirst(__('calendarios')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcalendarios'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('categoriacalendario_id', array(
						'label'=>ucfirst(__('categoriacalendario_id')),
					));

					echo $this->Form->input('titulo', array(
						'label'=>ucfirst(__('titulo')),
					));

					echo $this->Form->input('inicio', array(
						'label'=>ucfirst(__('inicio')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local()
					));

					echo $this->Form->input('termino', array(
						'label'=>ucfirst(__('termino')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local()
					));

					echo $this->Form->input('observacoes', array(
						'label'=>ucfirst(__('observacoes')),
					));

				?>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="form-actions">
		<button type="submit" class="btn btn-info">Save</button>
		<?php 
		echo $this->Html->link('Cancel',
			array('action'=>'index'),
			array('class'=>'btn btn-warning')
		);
?>	</div>	
</div>

<?php $this->start('box'); ?>
	
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Categoriacalendarios', 
						null,
						array('controller' => 'categoriacalendarios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>