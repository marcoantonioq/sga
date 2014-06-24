<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Categoriap'); ?>

<?php $this->start('contents'); ?>
<?php
	$displayFields = array(
		'id'=>'Categoriap.id',
		'nome'=>'Categoriap.nome',
		'descricao'=>'Categoriap.descricao',
	);

	echo $this->Table->createTableForm(
			"Categoriap",
			$categoriaps,
			$displayFields
		);
	?>
<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Categoriap.id'=>'id',
			'Categoriap.nome'=>'nome',
			'Categoriap.descricao'=>'descricao',
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>