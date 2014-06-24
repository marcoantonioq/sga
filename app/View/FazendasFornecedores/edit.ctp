<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'FazendasFornecedore'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('FazendasFornecedore', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabfazendasFornecedores' data-toggle='tab'><?php echo __('fazendasFornecedores') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabfazendasFornecedores'>
				<?php 

					echo $this->Form->input('int', array(
						'label'=>ucfirst(__('int')),
					));

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
					));

					echo $this->Form->input('fornecedore_id', array(
						'label'=>ucfirst(__('fornecedore_id')),
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
					<?php echo $this->Link->icon('Fornecedores', 
						null,
						array('controller' => 'fornecedores', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>