<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Atalho'); ?>

<?php $this->start('contents'); ?>
<?php
	$displayFields = array(
		'id'=>'Atalho.id',
		'User'=>'User.id',
		'title'=>'Atalho.title',
		'controller'=>'Atalho.controller',
		'action'=>'Atalho.action',
		'prefixes'=>'Atalho.prefixes',
		'plugin'=>'Atalho.plugin',
		'class'=>'Atalho.class',
	);

	echo $this->Table->createTableForm(
			"Atalho",
			$atalhos,
			$displayFields
		);
	?>
<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>