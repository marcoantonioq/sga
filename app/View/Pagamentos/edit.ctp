<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Pagamento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Pagamento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpagamentos' data-toggle='tab'><?php echo ucfirst(__('pagamentos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpagamentos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('centralcusto_id', array(
						'label'=>ucfirst(__('centralcusto_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('pagamentoscol', array(
						'label'=>ucfirst(__('pagamentoscol')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
					));

					echo $this->Form->input('vencimento', array(
						'label'=>ucfirst(__('vencimento')),
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
	
					<?php echo $this->Link->icon('Centralcustos', 
						null,
						array('controller' => 'centralcustos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>