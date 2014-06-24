<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Menssagen'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Menssagen', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabmenssagens' data-toggle='tab'><?php echo __('menssagens') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabmenssagens'>
				<?php 

					echo $this->Form->input('titulo', array(
						'label'=>ucfirst(__('titulo')),
					));

					echo $this->Form->input('conteudo', array(
						'label'=>ucfirst(__('conteudo')),
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