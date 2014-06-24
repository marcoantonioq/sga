<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Medicamento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Medicamento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabmedicamentos' data-toggle='tab'><?php echo ucfirst(__('medicamentos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabmedicamentos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('fazenda_id', array(
						'label'=>ucfirst(__('fazenda_id')),
					));

					echo $this->Form->input('fabricante_id', array(
						'label'=>ucfirst(__('fabricante_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('categoria', array(
						'label'=>ucfirst(__('categoria')),
					));

					echo $this->Form->input('notafiscal', array(
						'label'=>ucfirst(__('notafiscal')),
					));

					echo $this->Form->input('unidade', array(
						'label'=>ucfirst(__('unidade')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('comprado', array(
						'label'=>ucfirst(__('comprado')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('dose', array(
						'label'=>ucfirst(__('dose')),
					));

					echo $this->Form->input('validade', array(
						'label'=>ucfirst(__('validade')),
					));

					echo $this->Form->input('prescricao', array(
						'label'=>ucfirst(__('prescricao')),
					));

					// echo $this->Form->input('Bovino', array(
					// 	'label'=>ucfirst(__('Bovino')),
					// ));
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
					<?php echo $this->Link->icon('Fabricantes', 
						null,
						array('controller' => 'fabricantes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>