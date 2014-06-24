<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Group'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Group', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabgroups' data-toggle='tab'><?php echo ucfirst(__('groups')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabgroups'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('name', array(
						'label'=>ucfirst(__('name')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('user_count', array(
						'label'=>ucfirst(__('user_count')),
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
	
					<?php echo $this->Link->icon('Users', 
						null,
						array('controller' => 'users', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>