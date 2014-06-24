<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Atalho'); ?>

<?php $this->start('contents'); ?>
<?php 
	$fields = array(
		'Atalho' => array(
			'Id'=>'Atalho.id',
			'User'=>'User.id',
			'Title'=>'Atalho.title',
			'Controller'=>'Atalho.controller',
			'Action'=>'Atalho.action',
			'Prefixes'=>'Atalho.prefixes',
			'Plugin'=>'Atalho.plugin',
			'Class'=>'Atalho.class',
		),
	);
	echo $this->Table->tabtable($atalho, $fields)
?>
<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<div class="page-header">
    <h4>Relacionados</h4>
</div>


<div class="accordion pattern" id="accordion3">	
	</div>
<?php $this->end(); ?>