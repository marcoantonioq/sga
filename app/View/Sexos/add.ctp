<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Sexo'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Sexo', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabsexos' data-toggle='tab'><?php echo __('sexos') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabsexos'>
				<?php 

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('pessoa_count', array(
						'label'=>ucfirst(__('pessoa_count')),
					));

					echo $this->Form->input('user_count', array(
						'label'=>ucfirst(__('user_count')),
					));

					echo $this->Form->input('user_disable', array(
						'label'=>ucfirst(__('user_disable')),
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
	
					<?php echo $this->Link->icon('Pessoas', 
						null,
						array('controller' => 'pessoas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Users', 
						null,
						array('controller' => 'users', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>