<?php $this->extend('/Common/edit') ?>

<?php $this->assign('title', 'Pessoa'); ?>

<?php $this->start('contents'); ?>

<?php echo $this->Form->create('Pessoa'); ?>

	<?php
		$fields = array(
			'Pessoa'=>array(
				'id'=> array(
					'class'=>'span12',
				),
				'name'=> array(
					'class'=>'span12',
				),
				'username'=> array(
					'class'=>'span12',
				),
				'sexo_id'=> array(
					'class'=>'span12',
				),
				'nascimento'=> array(
					'class'=>'span12',
				),
				'cpf'=> array(
					'class'=>'span12',
				),
				'rg'=> array(
					'class'=>'span12',
				),
				'foto'=> array(
					'class'=>'span12',
					'type'=>'file'
				),
				'foto_dir'=> array(
					'class'=>'span12',
					'type'=>'hidden'
				),
			),
			'Permissão'=>array(
				'group_id'=> array(
					'class'=>'span12',
				),
				'password'=>array(
					'class'=>'span12',
				),
				'status'=>array(
					'class'=>'span12',
				),
			),
			'Contato'=>array(
				'contabanco'=> array(
					'class'=>'span12',
				),
				'email'=> array(
					'class'=>'span12',
				),
				'estado'=>array(
					'class'=>'span12',
				),
				'cidade'=>array(
					'class'=>'span12',
				),
				'rua'=>array(
					'class'=>'span12',
				),
				'bairro'=>array(
					'class'=>'span12',
				),
				'cep'=>array(
					'class'=>'span12',
				),
				'telefone'=>array(
					'class'=>'span12',
				),
			),
			'Contrato'=>array(
				'carteiratrabalho'=>array(
					'class'=>'span12'
				),
				'datecontratado'=>array(
					'class'=>'span12'
				),
				'contabanco'=>array(
					'class'=>'span12'
				),
				'Position'=>array(
					'class'=>'span12'
				),
				'premiacoes'=>array(
					'class'=>'span12'
				),
				'updated'=>array(
					'class'=>'span12',
				),
				'created'=>array(
					'class'=>'span12',
				),
			)
		);
		echo $this->Table->tabinput($fields);
	?>
	
	<?php $this->start('box'); ?>
		<ul>
			<li>
				<?php echo $this->element('html/link-black', array(
					'title'=>'Sexos', 
					'icon'=>'list',
					'url'=> array('controller' => 'sexos', 'action' => 'index')
				)); ?>
			</li>
			
			<li>
				<?php echo $this->element('html/link-black', array(
					'title'=>'Groups', 
					'icon'=>'list',
					'url'=> array('controller' => 'groups', 'action' => 'index')
				)); ?>
			</li>

			<li>
				<?php echo $this->element('html/link-black', array(
					'title'=>'Ocorrencias', 
					'icon'=>'list',
					'url'=> array('controller' => 'ocorrencias', 'action' => 'index')
				)); ?>
			</li>
			

			<li>
				<?php echo $this->element('html/link-black', array(
					'title'=>'Positions', 
					'icon'=>'list',
					'url'=> array('controller' => 'positions', 'action' => 'index')
				)); ?>
			</li>
		</ul>
	<?php $this->end(); ?>

<?php $this->end(); ?>