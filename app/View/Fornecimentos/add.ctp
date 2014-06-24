<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Fornecimento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Fornecimento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabfornecimentos' data-toggle='tab'><?php echo ucfirst(__('fornecimentos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabfornecimentos'>
				<?php 

					echo $this->Form->input('centralcusto_id', array(
						'label'=>ucfirst(__('centralcusto_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('retiro_id', array(
						'label'=>ucfirst(__('retiro_id')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local()
					));

					echo $this->Form->input('quantidade', array(
						'label'=>ucfirst(__('quantidade (kg)')),
					));

					echo $this->Form->input('preco', array(
						'label'=>ucfirst(__('preco')),
					));

					echo $this->Form->input('observacoes', array(
						'label'=>ucfirst(__('observacoes')),
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
	
					<?php echo $this->Link->icon('Retiros', 
						null,
						array('controller' => 'retiros', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>