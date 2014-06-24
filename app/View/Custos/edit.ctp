<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Custo'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Custo', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcustos' data-toggle='tab'><?php echo ucfirst(__('custos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcustos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('centralcusto_id', array(
						'label'=>ucfirst(__('centralcusto_id')),
					));

					echo $this->Form->input('item', array(
						'label'=>ucfirst(__('item')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
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