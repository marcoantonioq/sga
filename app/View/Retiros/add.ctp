<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Retiro'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Retiro', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabretiros' data-toggle='tab'><?php echo __('retiros') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabretiros'>
				<?php 

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('cod_ordenha', array(
						'label'=>ucfirst(__('cod_ordenha')),
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
	
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pastos', 
						null,
						array('controller' => 'pastos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>