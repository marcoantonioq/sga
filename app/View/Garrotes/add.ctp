<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Garrote'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Garrote', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabgarrotes' data-toggle='tab'><?php echo ucfirst(__('garrotes')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabgarrotes'>
				<?php 

					echo $this->Form->input('bovino_id', array(
						'label'=>ucfirst(__('bovino_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('datanascimento', array(
						'label'=>ucfirst(__('datanascimento')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local()
					));

					echo $this->Form->input('totalpesagem', array(
						'label'=>ucfirst(__('totalpesagem')),
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
	
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>