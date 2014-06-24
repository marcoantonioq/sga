<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Fazenda'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Fazenda', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabfazendas' data-toggle='tab'><?php echo __('fazendas') ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabfazendas'>
				<?php 

					echo $this->Form->input('proprietario', array(
						'label'=>ucfirst(__('proprietario')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('telefone', array(
						'label'=>ucfirst(__('telefone')),
					));

					echo $this->Form->hidden('saldo', array(
						'label'=>ucfirst(__('saldo')),
					));

					echo $this->Form->input('cnpj', array(
						'label'=>ucfirst(__('cnpj')),
					));

					echo $this->Form->input('estado', array(
						'label'=>ucfirst(__('estado')),
					));

					echo $this->Form->input('cidade', array(
						'label'=>ucfirst(__('cidade')),
					));

					echo $this->Form->input('inscricaoestatual', array(
						'label'=>ucfirst(__('inscricaoestatual')),
					));

					echo $this->Form->input('fax', array(
						'label'=>ucfirst(__('fax')),
					));

					echo $this->Form->input('atividades', array(
						'label'=>ucfirst(__('atividades')),
					));

					echo $this->Form->input('Cliente', array(
						'label'=>ucfirst(__('Cliente')),
					));

					echo $this->Form->input('Fornecedore', array(
						'label'=>ucfirst(__('Fornecedores')),
					));

					echo $this->Form->input('Pessoa', array(
						'label'=>ucfirst(__('Pessoa')),
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
	
					<?php echo $this->Link->icon('Accounts', 
						null,
						array('controller' => 'accounts', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Calendarios', 
						null,
						array('controller' => 'calendarios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Medicamentos', 
						null,
						array('controller' => 'medicamentos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Patrimonios', 
						null,
						array('controller' => 'patrimonios', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Retiros', 
						null,
						array('controller' => 'retiros', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Clientes', 
						null,
						array('controller' => 'clientes', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Fornecedores', 
						null,
						array('controller' => 'fornecedores', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pessoas', 
						null,
						array('controller' => 'pessoas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>