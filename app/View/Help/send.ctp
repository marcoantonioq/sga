<?php echo $this->Form->create('Message'); ?>

<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

<div class="row-fluid">
	<div class='span8'>

	<?php
		echo $this->Form->hidden('to', array('label' => 'Para', 'value'=>'marco.aq@live.com'));
		echo $this->Form->input('subject', array('label' => 'Título'));
		echo $this->Form->textarea('message', 
			array(
				'label' => 'Mensagem', 
				'class' => 'ckeditor span12'
			)
		);
	?>
	<div class="form-actions">
		<button type="submit" class="btn btn-info">Enviar</button>
		<?php 
		echo $this->Html->link('Cancel',
			array('action'=>'index'),
			array('class'=>'btn btn-warning')
		);?>
	</div>	

	</div>
</div>
