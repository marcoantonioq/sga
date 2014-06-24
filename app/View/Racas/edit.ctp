<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Raca'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Raca', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabracas' data-toggle='tab'><?php echo ucfirst(__('racas')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabracas'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('origem', array(
						'label'=>ucfirst(__('origem')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('Bovino', array(
						'label'=>ucfirst(__('Bovino')),
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