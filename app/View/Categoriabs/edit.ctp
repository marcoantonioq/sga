<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Categoriab'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Categoriab', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcategoriabs' data-toggle='tab'>categoriabs</a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcategoriabs'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>'id',
					));

					echo $this->Form->input('nome', array(
						'label'=>'Nome',
					));

					echo $this->Form->input('descricao', array(
						'label'=>'Descrição',
					));

					echo $this->Form->hidden('bovino_count', array(
						'label'=>'Contador',
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
	
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>