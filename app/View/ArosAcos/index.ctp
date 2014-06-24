<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'ArosAco'); ?>

<?php $this->start('contents'); ?>
<?php
	$displayFields = array(
		'id'=>'ArosAco.id',
		'Aro'=>'Aro.id',
		'Aco'=>'Aco.id',
		'_create'=>'ArosAco._create',
		'_read'=>'ArosAco._read',
		'_update'=>'ArosAco._update',
		'_delete'=>'ArosAco._delete',
	);
	echo $this->Table->createTableForm(
			"ArosAco",
			$arosAcos,
			$displayFields
		);
	?>
<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Aros', 
			'bended_arrow_left',
			array('controller' => 'aros', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Acos', 
			'bended_arrow_left',
			array('controller' => 'acos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'ArosAco.id'=>'id',
			'ArosAco.aro_id'=>'aro_id',
			'ArosAco.aco_id'=>'aco_id',
			'ArosAco._create'=>'_create',
			'ArosAco._read'=>'_read',
			'ArosAco._update'=>'_update',
			'ArosAco._delete'=>'_delete',
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>