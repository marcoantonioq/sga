<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Categoriam'); ?>

<?php $this->start('contents'); ?>
<?php
	$displayFields = array(
		'id'=>'Categoriam.id',
		'nome'=>'Categoriam.nome',
		'descricao'=>'Categoriam.descricao',
	);

	echo $this->Table->createTableForm(
			"Categoriam",
			$categoriams,
			$displayFields
		);
	?>
<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Almoxarifados', 
			'bended_arrow_left',
			array('controller' => 'almoxarifados', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Categoriam.id'=>'id',
			'Categoriam.nome'=>'nome',
			'Categoriam.descricao'=>'descricao',
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>