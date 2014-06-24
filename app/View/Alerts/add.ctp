<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Alert'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Alert', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabalerts' data-toggle='tab'><?php echo ucfirst(__('alerts')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabalerts'>
				<?php 

					echo $this->Form->input('titulo', array(
						'label'=>ucfirst(__('titulo')),
					));

					echo $this->Form->input('tipo', array(
						'label'=>ucfirst(__('tipo')),
					));

					echo $this->Form->input('nivel', array(
						'label'=>ucfirst(__('nivel')),
					));

					echo $this->Form->input('categoria', array(
						'label'=>ucfirst(__('categoria')),
					));

					echo $this->Form->input('origem', array(
						'label'=>ucfirst(__('origem')),
					));

					echo $this->Form->input('messagem', array(
						'label'=>ucfirst(__('messagem')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('Group', array(
						'label'=>ucfirst(__('Group')),
					));

					echo $this->Form->input('User', array(
						'label'=>ucfirst(__('User')),
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
	
					<?php echo $this->Link->icon('Groups', 
						null,
						array('controller' => 'groups', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Users', 
						null,
						array('controller' => 'users', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>