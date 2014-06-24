<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Quote'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Quote', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabquotes' data-toggle='tab'><?php echo ucfirst(__('quotes')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabquotes'>
				<?php 

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('contrato', array(
						'label'=>ucfirst(__('contrato')),
					));

					echo $this->Form->input('ultimo', array(
						'label'=>ucfirst(__('ultimo')),
					));

					echo $this->Form->input('variacao', array(
						'label'=>ucfirst(__('variacao')),
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
	
<?php $this->end(); ?>


<?php $this->end(); ?>