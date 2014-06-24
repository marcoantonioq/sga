<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'PessoasCargo'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('PessoasCargo', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpessoasCargos' data-toggle='tab'><?php echo __('pessoasCargos') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpessoasCargos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('pessoa_id', array(
						'label'=>ucfirst(__('pessoa_id')),
					));

					echo $this->Form->input('cargo_id', array(
						'label'=>ucfirst(__('cargo_id')),
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
	
					<?php echo $this->Link->icon('Pessoas', 
						null,
						array('controller' => 'pessoas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Cargos', 
						null,
						array('controller' => 'cargos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>