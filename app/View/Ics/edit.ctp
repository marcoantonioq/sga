<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Ic'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Ic', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabics' data-toggle='tab'><?php echo __('ics') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabics'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('semem_id', array(
						'label'=>ucfirst(__('semem_id')),
					));

					echo $this->Form->input('tipo', array(
						'label'=>'Tipo',
						'type'=>'select',
						'options'=>array(
							'Inseminação Artificial'=>'Inseminação Artificial',
							'Monta Controlada'=>'Monta Controlada',
							'Monta Campo'=>'Monta Campo',
						)
					));

					echo $this->Form->input('status', array(
						'label'=>'Situação',
						'type'=>'select',
						'options'=>array(
							'Inseminação'=>'Inseminação',
							'Gestante'=>'Gestante',
							'Parto'=>'Parto',
							'Abordo'=>'Abordo',
						)
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local($this->request->data['Ic']['data']),
					));

					echo $this->Form->input('dataparto', array(
						'label'=>ucfirst(__('dataparto')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local(),
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
	
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Semems', 
						null,
						array('controller' => 'semems', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Eventos', 
						null,
						array('controller' => 'eventos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>