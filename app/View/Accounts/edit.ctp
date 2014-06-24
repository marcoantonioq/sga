<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Account'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Account', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabaccounts' data-toggle='tab'><?php echo ucfirst(__('accounts')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabaccounts'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
					));

					echo $this->Form->input('banco', array(
						'label'=>ucfirst(__('banco')),
					));

					echo $this->Form->input('agencia', array(
						'label'=>ucfirst(__('agencia')),
					));

					echo $this->Form->input('numero', array(
						'label'=>ucfirst(__('numero')),
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
<?php $this->end(); ?>


<?php $this->end(); ?>