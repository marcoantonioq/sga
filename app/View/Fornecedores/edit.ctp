<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Fornecedore'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Fornecedore', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabfornecedores' data-toggle='tab'><?php echo ucfirst(__('fornecedores')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabfornecedores'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('rua', array(
						'label'=>ucfirst(__('rua')),
					));

					echo $this->Form->input('bairro', array(
						'label'=>ucfirst(__('bairro')),
					));

					echo $this->Form->input('municipio', array(
						'label'=>ucfirst(__('municipio')),
					));

					echo $this->Form->input('cep', array(
						'label'=>ucfirst(__('cep')),
					));

					echo $this->Form->input('estato', array(
						'label'=>ucfirst(__('estato')),
					));

					echo $this->Form->input('telefone', array(
						'label'=>ucfirst(__('telefone')),
					));

					echo $this->Form->input('fax', array(
						'label'=>ucfirst(__('fax')),
					));

					echo $this->Form->input('email', array(
						'label'=>ucfirst(__('email')),
					));

					echo $this->Form->input('cnpj', array(
						'label'=>ucfirst(__('cnpj')),
					));

					echo $this->Form->input('inscricaoestatual', array(
						'label'=>ucfirst(__('inscricaoestatual')),
					));

					echo $this->Form->input('Fazenda', array(
						'label'=>ucfirst(__('Fazenda')),
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
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>