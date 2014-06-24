<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'User'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('User', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabusers' data-toggle='tab'><?php echo __('users') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabusers'>
				<?php 

					echo $this->Form->input('username', array(
						'label'=>ucfirst(__('username')),
					));

					echo $this->Form->input('email', array(
						'label'=>ucfirst(__('email')),
					));

					echo $this->Form->input('password', array(
						'label'=>ucfirst(__('password')),
					));

					echo $this->Form->input('status', array(
						'label'=>ucfirst(__('status')),
					));

					echo $this->Form->input('sexo_id', array(
						'label'=>ucfirst(__('sexo_id')),
					));

					echo $this->Form->input('group_id', array(
						'label'=>ucfirst(__('group_id')),
					));

					echo $this->Form->hidden('foto', array(
						'label'=>ucfirst(__('foto')),
						'type'=>'file'
					));

					echo $this->Form->hidden('foto_dir', array(
						'label'=>ucfirst(__('foto_dir')),
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
	
		<?php 
		echo $this->Link->icon('Grupos', 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Ocorrências', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

<?php $this->end(); ?>


<?php $this->end(); ?>