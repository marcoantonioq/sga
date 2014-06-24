<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Taxa'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Taxa', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabtaxas' data-toggle='tab'><?php echo ucfirst(__('taxas')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabtaxas'>
				<?php 

					echo $this->Form->input('quote_id', array(
						'label'=>ucfirst(__('quote_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('valores', array(
						'label'=>ucfirst(__('valores')),
					));

					echo $this->Form->input('date', array(
						'label'=>ucfirst(__('date')),
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
	
					<?php echo $this->Link->icon('Quotes', 
						null,
						array('controller' => 'quotes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>