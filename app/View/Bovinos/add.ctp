<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Bovino'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Bovino', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabbovinos' data-toggle='tab'>Bovinos</a>
            </li>
            <li>
            	<a href='#detalhes' data-toggle='tab'>Detalhes*</a>
            </li>
            <li>
            	<a href='#financeiro' data-toggle='tab'>Financeiro</a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabbovinos'>
				<?php 
					echo $this->Form->input('nbrinco', array(
						'label'=>ucfirst(__('brinco')),
					));

					echo $this->Form->input('nome', array(
						'label'=>ucfirst(__('nome')),
					));

					echo $this->Form->input('categoriab_id', array(
						'label'=>ucfirst(__('categoria')),
					));

					echo $this->Form->input('sexobovino_id', array(
						'label'=>ucfirst(__('sexo')),
					));

					echo $this->Form->input('nascimento', array(
						'label'=>ucfirst(__('nascimento')),
						'type'=>'datetime-local',
					));
				?>

        	</div>
        	<div class='tab-pane' id='detalhes'>
        		<?php        		

					echo $this->Form->input('pai', array(
						'label'=>ucfirst(__('pai')),
					));

					echo $this->Form->input('mae', array(
						'label'=>ucfirst(__('mae')),
					));

					echo $this->Form->input('pasto_id', array(
						'label'=>ucfirst(__('pasto_id')),
					));

					echo $this->Form->input('pelagen_id', array(
						'label'=>ucfirst(__('pelagen_id')),
					));

					echo $this->Form->input('desaleitamento', array(
						'label'=>ucfirst(__('desaleitamento')),
					));

					echo $this->Form->input('descricao', array(
						'label'=>ucfirst(__('descricao')),
					));

					echo $this->Form->input('status', array(
						'label'=>ucfirst(__('status')),
					));

					echo $this->Form->input('cria', array(
						'label'=>ucfirst(__('cria')),
					));

					echo $this->Form->input('cascosnormais', array(
						'label'=>ucfirst(__('cascosnormais')),
					));

					echo $this->Form->input('Raca', array(
						'label'=>ucfirst(__('raca')),
						'class'=>'nostyle span12'
					));

					echo $this->Form->input('Medicamento', array(
						'label'=>ucfirst(__('medicamento')),
					));
        		?>
			</div>
        	<div class='tab-pane' id='financeiro'>

        	<?php 

					echo $this->Form->input('preco', array(
						'label'=>ucfirst(__('preço')),
					));

					echo $this->Form->input('idvenda', array(
						'label'=>ucfirst(__('id venda')),
					));

					echo $this->Form->input('idcompra', array(
						'label'=>ucfirst(__('id compra')),
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
	
					<?php echo $this->Link->icon('Pastos', 
						null,
						array('controller' => 'pastos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Categoria bovinos', 
						null,
						array('controller' => 'categoriabs', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Sexobovinos', 
						null,
						array('controller' => 'sexobovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pelagens', 
						null,
						array('controller' => 'pelagens', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Eventos', 
						null,
						array('controller' => 'eventos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Inseminação', 
						null,
						array('controller' => 'ics', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pesagem leite', 
						null,
						array('controller' => 'leitepesagens', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Movimentação de animais', 
						null,
						array('controller' => 'movbovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pesagem', 
						null,
						array('controller' => 'pesagens', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Raças', 
						null,
						array('controller' => 'racas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Medicamentos', 
						null,
						array('controller' => 'medicamentos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>