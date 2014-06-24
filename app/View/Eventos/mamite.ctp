<?php $this->extend('/Common/add') ?>
<?php $this->assign('title', 'Evento'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Evento', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>
<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#Evento' data-toggle='tab'>Evento</a>
            </li>
            <li>
            	<a href='#Doenca' data-toggle='tab'>Doença</a>
        	</li>
            <li>
            	<a href='#Observacoes' data-toggle='tab'>Observações <span class="red">*</span></a>
        	</li>
        </ul>

        <div class='tab-content'>
        	<div class='tab-pane active' id='Evento'>
				<?php
					echo $this->Form->hidden('user_id', array(
						'label'=>__('Usuário'),
						'value'=> $this->Session->read('Auth.User.id')
					));
					
					echo $this->Form->input('nome', array(
						'label'=>__('nome'),
					));

					echo $this->Form->input('Bovino', array(
						'label'=>__('Bovino'),
						'class'=>'nostyle span12',
					));

					echo $this->Form->input('categoriasevento_id', array(
						'empty'=>'Selecione...',
						'label'=>__('Categoria evento'),
						'value'=>'5',
					));

					echo $this->Form->input('status', array(
						'label'=>__('Status'),
						'type'=>'select',
						'empty'=>'Selecione...',
						'options'=>array(
							'Aberto' => 'Aberto',
							'Fechado' => 'Fechado',
							'Em andamento' => 'Em andamento',
						),
						'value'=>'Fechado'
					));

					echo $this->Form->input('datainicial', array(
						'label'=>__('Início'),
						'type'=>'datetime-local',
						'value' => date('Y-m-d\TH:00'),
					));
					
					echo $this->Form->input('datafinal', array(
						'label'=>__('Data término'),
						'type'=>'datetime-local',
						'value' => date('Y-m-d\TH:00', strtotime('+1 months')),
					));

					echo $this->Form->hidden('datamax', array(
						'label'=>__('Data máxima'),
						'type'=>'datetime-local',
					));

					echo $this->Form->hidden('alerta', array(
						'label'=>__('alerta'),
					));

					echo $this->Form->hidden('lancarcalendario', array('label'=>__('Lançar no calendario?')));


				 ?>
			</div>

			<div class='tab-pane' id='Doenca'>
				<?php 
					echo $this->Form->input('Doenca', array(
						'label'=>__('Doenca'),
						'class'=>'nostyle span12',
					));
					
					echo $this->Form->input('diagnostico', array(
						'label'=>__('diagnostico'),
					));
				 ?>
			</div>

			<div class='tab-pane' id='Observacoes'>
				<?php 
					echo $this->Form->input('descricao', array(
						'label'=>__('Descricao'),
						'type'=>'textarea'
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
	
					<?php echo $this->Link->icon('Usuários', 
						null,
						array('controller' => 'users', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Bovinos', 
						null,
						array('controller' => 'bovinos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Categorias eventos', 
						null,
						array('controller' => 'categoriaseventos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Inseminação', 
						null,
						array('controller' => 'ics', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Doenças', 
						null,
						array('controller' => 'doencas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>