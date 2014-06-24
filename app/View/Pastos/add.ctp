<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Pasto'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Pasto', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpastos' data-toggle='tab'><?php echo __('pastos') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpastos'>
				<?php 

					echo $this->Form->input('retiro_id', array(
						'label'=>ucfirst(__('retiro_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('tipo', array(
						'label'=>ucfirst(__('tipo')),
						'type'=>'select',
						'options'=>array(
							'Nativas'=>'Nativas',
							'Cultivadas'=>'Cultivadas',
							'Adubadas'=>'Adubadas'
						)
					));

					echo $this->Form->input('datainclusao', array(
						'label'=>ucfirst(__('datainclusao')),
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m")
					));

					echo $this->Form->input('area', array(
						'label'=>ucfirst(__('area')),
					));

					echo $this->Form->input('topografia', array(
						'label'=>ucfirst(__('topografia')),
						'options'=>array(
							'Ondulado'=>'Ondulado',
							'Plano'=>'Plano',
							'Inclinado'=>'Inclinado',
						)
					));

					echo $this->Form->input('tipoaguado', array(
						'label'=>ucfirst(__('tipoaguado')),
					));

					echo $this->Form->input('bovino_count', array(
						'label'=>ucfirst(__('bovino_count')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
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
	
					<?php echo $this->Link->icon('Retiros', 
						null,
						array('controller' => 'retiros', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>