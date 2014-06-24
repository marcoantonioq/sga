<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Venda'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Venda', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabvendas' data-toggle='tab'><?php echo ucfirst(__('vendas')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabvendas'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('produto_id', array(
						'label'=>ucfirst(__('produto_id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('cliente_id', array(
						'label'=>ucfirst(__('cliente_id')),
					));

					echo $this->Form->input('patrimonio_id', array(
						'label'=>ucfirst(__('patrimonio_id')),
					));

					echo $this->Form->input('quantidade', array(
						'label'=>ucfirst(__('quantidade')),
					));

					echo $this->Form->input('valor', array(
						'label'=>ucfirst(__('valor')),
					));

					echo $this->Form->input('pago', array(
						'label'=>ucfirst(__('pago')),
					));

					echo $this->Form->input('emissao', array(
						'label'=>ucfirst(__('emissao')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('data', array(
						'label'=>ucfirst(__('data')),
					));

					echo $this->Form->input('Centralcusto', array(
						'label'=>ucfirst(__('Centralcusto')),
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
	
					<?php echo $this->Link->icon('Produtos', 
						null,
						array('controller' => 'produtos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Clientes', 
						null,
						array('controller' => 'clientes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Patrimonios', 
						null,
						array('controller' => 'patrimonios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Centralcustos', 
						null,
						array('controller' => 'centralcustos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>