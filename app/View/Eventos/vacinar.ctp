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


<script>
    function bloquearCtrlJ(){   // Verificação das Teclas  
        var tecla=window.event.keyCode;   //Para controle da tecla pressionada  
        var ctrl=window.event.ctrlKey;    //Para controle da Tecla CTRL  

        if (ctrl && tecla==74){    //Evita teclar ctrl + j  
            event.keyCode=0;  
            event.returnValue=false;  
        }  
    }  
</script>

<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#Evento' data-toggle='tab'>Vacinar</a>
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
					
					echo $this->Form->input('id_bovino.0', array(
						'label'=>__('Bovino (id):'),
						'onkeydown'=>'bloquearCtrlJ();',
						'autofocus'=>true
					));

					echo $this->Form->hidden('nome', array(
						'label'=>__('nome'),
						'value'=>'Vacina '.$this->Date->datetime()
					));

					echo $this->Form->input('Bovino', array(
						'label'=>__('Bovino'),
						'class'=>'nostyle span12',
					));

					echo $this->Form->hidden('categoriasevento_id', array(
						'empty'=>'Selecione...',
						'label'=>__('Categoria evento'),
						'value'=>'7'
					));

					echo $this->Form->hidden('status', array(
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

					echo $this->Form->hidden('datainicial', array(
						'label'=>__('Início'),
						'type'=>'datetime-local',
						'value' => date('Y-m-d\TH:00'),
					));
					
					echo $this->Form->hidden('datafinal', array(
						'label'=>__('Data término'),
						'type'=>'datetime-local',
						'value' => date('Y-m-d\TH:00', strtotime('+2 hours')),
					));

					echo $this->Form->hidden('alerta', array(
						'label'=>__('alerta'),
					));

					echo $this->Form->hidden('lancarcalendario', array('label'=>__('Lançar no calendario?')));


				 ?>
			</div>

			<div class='tab-pane' id='Observacoes'>
				<?php 
					echo $this->Form->input('descricao', array(
						'label'=>__('Descricao'),
						'type'=>'textarea',
						'value'=>($this->request->data['Evento']['descricao'])
					));
				 ?>
			</div>

		</div>
	</div>
	<div class="row-fluid">
		<div class="form-actions">
			<button type="submit" value="save" class="btn btn-info">Save</button>
			<?php 

			echo $this->Form->button('Form.asds',
				array(
					'type'=>'button',
					'data'=>'Form.data',
					'value'=>'Valor.asdfg',
					'class'=>'btn', 
					'onClick'=>'form.submit()'
				)
			);

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