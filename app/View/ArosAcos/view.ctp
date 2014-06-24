<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'ArosAco'); ?>

<?php $this->start('contents'); ?>
<?php 
	$fields = array(
		'Aros Aco' => array(
			'Id'=>'ArosAco.id',
			'Aro'=>'Aro.id',
			'Aco'=>'Aco.id',
			' Create'=>'ArosAco._create',
			' Read'=>'ArosAco._read',
			' Update'=>'ArosAco._update',
			' Delete'=>'ArosAco._delete',
		),
	);
	echo $this->Table->tabtable($arosAco, $fields)
?>
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


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">


	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>