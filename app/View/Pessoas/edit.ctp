<?php $this->extend('/Common/edit') ?>
<?php $this->assign('title', 'Pessoa'); ?>
<?php $this->start('contents'); ?>
<?php echo $this->Form->create('Pessoa', array('enctype' => 'multipart/form-data')); ?>


<?php 
	$this->Form->inputDefaults(array(
	    'label' => false,
	    'class' => 'span12',
	));
?>

	<div class='tabbable'>
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tabpessoas' data-toggle='tab'><?php echo "Pessoa"; ?></a>
            </li>
            <li>
            	<a href='#contato' data-toggle='tab'><?php echo ucfirst(__('contato*')); ?></a>
            </li>
            <li>
            	<a href='#contrato' data-toggle='tab'><?php echo ucfirst(__('contrato*')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tabpessoas'>
				<?php 

					echo $this->Form->input('id', array(
						'label'=>ucfirst(__('id')),
					));

					echo $this->Form->input('name', array(
						'label'=>ucfirst(__('name')),
					));

					echo $this->Form->input('username', array(
						'label'=>ucfirst(__('username')),
					));

					echo $this->Form->input('sexo_id', array(
						'label'=>ucfirst(__('sexo_id')),
					));


					echo $this->Form->input('password', array(
						'label'=>ucfirst(__('password')),
						'value'=>''
					));

					echo $this->Form->input('status', array(
						'label'=>ucfirst(__('status')),
					));


					echo $this->Form->input('nascimento', array(
						'label'=>ucfirst(__('nascimento')),
						'required'=>true,
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m"),
					));

					echo $this->Form->input('cpf', array(
						'label'=>ucfirst(__('cpf')),
						'id' => 'cpf',
						'maxLength'=>'14',
						'placeholder' => 'Digite cpf...',
						'pattern' => "^\d{3}.\d{3}.\d{3}-\d{2}$",
						'placeholder'=>"123.456.789-10"
					));

					echo $this->Form->input('rg', array(
						'label'=>ucfirst(__('rg')),
					));



					echo $this->Form->hidden('foto', array(
						'label'=>ucfirst(__('foto')),
					));

					echo $this->Form->hidden('foto_dir', array(
						'label'=>ucfirst(__('foto_dir')),
					));
				?>
				
			</div>

			<div class='tab-pane' id='contato'>

				<?php 

					echo $this->Form->input('email', array(
						'label'=>ucfirst(__('email')),
					));
					
					echo $this->Form->input('estado', array(
						'label'=>ucfirst(__('estado')),
					));

					echo $this->Form->input('cidade', array(
						'label'=>ucfirst(__('cidade')),
					));

					echo $this->Form->input('rua', array(
						'label'=>ucfirst(__('rua')),
					));

					echo $this->Form->input('bairro', array(
						'label'=>ucfirst(__('bairro')),
					));

					echo $this->Form->input('cep', array(
						'label'=>ucfirst(__('cep')),
					));

					echo $this->Form->input('telefone', array(
						'label'=>ucfirst(__('telefone')),
						'placeholder' => 'xx11111111',
						'id' => 'telefone',
						'pattern' => '\(\d{2}\) \d{4}-\d{4}'
					));

					echo $this->Form->input('Fazenda', array(
						'label'=>ucfirst(__('Fazenda')),
					));

				 ?>

			</div>

			<div class='tab-pane' id='contrato'>

				<?php 
					echo $this->Form->input('contabanco', array(
						'label'=>ucfirst(__('contabanco')),
					));

					echo $this->Form->input('carteiratrabalho', array(
						'label'=>ucfirst(__('carteiratrabalho')),
					));

					echo $this->Form->hidden('anexo', array(
						'label'=>ucfirst(__('anexo')),
					));

					echo $this->Form->hidden('anexo_dir', array(
						'label'=>ucfirst(__('anexo_dir')),
					));

					echo $this->Form->input('datecontratado', array(
						'label'=>ucfirst(__('datecontratado')),
						'type'=>'datetime-local',
						'value'=>date("Y-m-d\TH:m"),
					));

					echo $this->Form->input('premiacoes', array(
						'label'=>ucfirst(__('premiacoes')),
					));

					echo $this->Form->hidden('parent_id', array(
						'label'=>ucfirst(__('parent_id')),
					));

					echo $this->Form->hidden('lft', array(
						'label'=>ucfirst(__('lft')),
					));

					echo $this->Form->hidden('rght', array(
						'label'=>ucfirst(__('rght')),
					));
					echo $this->Form->input('Cargo', array(
						'label'=>ucfirst(__('Cargo')),
					));
				 ?>
					
			</div>
		</div>
	</div>


<script type="text/javascript">
	/* Máscaras ER */
	function mascara(o,f){
	    v_obj=o
	    v_fun=f
	    setTimeout("execmascara()",1)
	}
	function execmascara(){
	    v_obj.value=v_fun(v_obj.value)
	}
	function mtel(v){
	    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
	    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
	    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
	    return v;
	}

	function mCPF(v){
	    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
	    v=v.replace(/^(\d{6})(\d)/g,"$1.$2");
	    v=v.replace(/^(\d{3})(\d)/g,"$1.$2");
	    v=v.replace(/(\d)(\d{2})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
	    return v;
	}

	function id( el ){
	  return document.getElementById( el );
	}
	window.onload = function(){
	  id('telefone').onkeyup = function(){
	    mascara( this, mtel );
	  }
	  id('cpf').onkeyup = function(){
	    mascara( this, mCPF );
	  }
	}
</script>


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
	
					<?php echo $this->Link->icon('Sexos', 
						null,
						array('controller' => 'sexos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Pessoas', 
						null,
						array('controller' => 'pessoas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Fazendas', 
						null,
						array('controller' => 'fazendas', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
					<?php echo $this->Link->icon('Cargos', 
						null,
						array('controller' => 'cargos', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>
<?php $this->end(); ?>


<?php $this->end(); ?>