<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'EventosDoenca'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('EventosDoenca', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabeventosDoencas' data-toggle='tab'><?php echo __('eventosDoencas') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabeventosDoencas'>
				<?php 

					echo $this->Form->input('evento_id', array(
						'label'=>ucfirst(__('evento_id')),
					));

					echo $this->Form->input('doenca_id', array(
						'label'=>ucfirst(__('doenca_id')),
					));

					echo $this->Form->input('diagnostico', array(
						'label'=>ucfirst(__('diagnostico')),
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
	
					<?php echo $this->Link->icon('Eventos', 
						null,
						array('controller' => 'eventos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Doencas', 
						null,
						array('controller' => 'doencas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>