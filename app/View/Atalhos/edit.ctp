<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Atalho'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Atalho'); ?>

	<?php 
	$fields = array(
		'atalhos'=>array(
			'id'=> array(
				'class'=>'span12'
			),
			'user_id'=> array(
				'class'=>'span12'
			),
			'title'=> array(
				'class'=>'span12'
			),
			'controller'=> array(
				'class'=>'span12'
			),
			'action'=> array(
				'class'=>'span12'
			),
			'prefixes'=> array(
				'class'=>'span12'
			),
			'plugin'=> array(
				'class'=>'span12'
			),
			'class'=> array(
				'class'=>'span12'
			),
		),
	);
		echo $this->Table->tabinput($fields);
?>
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