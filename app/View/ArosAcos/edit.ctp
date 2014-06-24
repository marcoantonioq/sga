<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'ArosAco'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('ArosAco', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	
        <ul class='nav nav-tabs'>
                <li class='active'>
                    <a href='#tabarosAcos' data-toggle='tab'>arosAcos</a>
                </li>
        </ul>
        <div class='tab-content'><?php 
	$fields = array(
		'arosAcos'=>array(
			'id'=> array(
				'label'=>'id'
			),
			'aro_id'=> array(
				'label'=>'aro_id'
			),
			'aco_id'=> array(
				'label'=>'aco_id'
			),
			'_create'=> array(
				'label'=>'_create'
			),
			'_read'=> array(
				'label'=>'_read'
			),
			'_update'=> array(
				'label'=>'_update'
			),
			'_delete'=> array(
				'label'=>'_delete'
			),
		),
	);
		echo $this->Table->tabinput($fields);
?>
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
	
					<?php echo $this->Link->icon('Aros', 
						null,
						array('controller' => 'aros', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Acos', 
						null,
						array('controller' => 'acos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>