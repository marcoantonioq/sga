<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Recebimento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Recebimento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabrecebimentos' data-toggle='tab'><?php echo ucfirst(__('recebimentos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabrecebimentos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('quote_id', array(
						'label'=>ucfirst(__('quote_id')),
					));

					echo $this->Form->input('ncheque', array(
						'label'=>ucfirst(__('ncheque')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('venciemtno', array(
						'label'=>ucfirst(__('venciemtno')),
					));

					echo $this->Form->input('documento', array(
						'label'=>ucfirst(__('documento')),
					));

					echo $this->Form->input('emissao', array(
						'label'=>ucfirst(__('emissao')),
					));

					echo $this->Form->input('vencimento', array(
						'label'=>ucfirst(__('vencimento')),
					));

					echo $this->Form->input('recebimento', array(
						'label'=>ucfirst(__('recebimento')),
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