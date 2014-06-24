<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Centralcusto'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Centralcusto', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabcentralcustos' data-toggle='tab'><?php echo ucfirst(__('centralcustos')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabcentralcustos'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));
					
					echo $this->Form->input('mes', array(
						'label'=>ucfirst(__('mes')),
						'readonly'=>true,
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local($this->request->data['Centralcusto']['mes'])
					));


					echo $this->Form->input('fechamento', array(
						'label'=>ucfirst(__('fechamento')),
						'type'=>'datetime-local',
						'value'=>$this->Date->datetime_local()
					));

					echo $this->Form->input('entrada', array(
						'label'=>ucfirst(__('entrada R$')),
					));

					echo $this->Form->hidden('quantidade', array(
						'label'=>ucfirst(__('quantidade')),
					));

					echo $this->Form->input('custofixo', array(
						'label'=>ucfirst(__('custofixo')),
					));

					echo $this->Form->input('outrosvalores', array(
						'label'=>ucfirst(__('outrosvalores')),
					));

					echo $this->Form->input('custovariavel', array(
						'label'=>ucfirst(__('custovariavel')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('Compra', array(
						'label'=>ucfirst(__('Compra')),
					));
					echo $this->Form->input('Venda', array(
						'label'=>ucfirst(__('Venda')),
					));

					echo $this->Form->input('status', array(
						'label'=>ucfirst(__('Fechar')),
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
	
					<?php echo $this->Link->icon('Compras', 
						null,
						array('controller' => 'compras', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Custos', 
						null,
						array('controller' => 'custos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Vendas', 
						null,
						array('controller' => 'vendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>