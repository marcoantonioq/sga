<?php $this->extend('/Common/add') ?>

<?php $this->assign('title', 'Pessoa'); ?>

<?php $this->start('contents'); ?>

<?php echo $this->Form->create('Pessoa'); ?>
	<?php
		$fields = array(
			'Pessoa'=>array(
				'Pessoa.name'=> array(
					'class'=>'span12',
				),
				'Pessoa.username'=> array(
					'class'=>'span12',
				),
				'Pessoa.sexo_id'=> array(
					'class'=>'span12',
				),
				'Pessoa.group_id'=> array(
					'class'=>'span12',
				),
				'Pessoa.email'=> array(
					'class'=>'span12',
				),
				'Pessoa.contabanco'=> array(
					'class'=>'span12',
				),
				'Pessoa.nascimento'=> array(
					'class'=>'span12',
				),
				'Pessoa.cpf'=> array(
					'class'=>'span12',
				),
				'Pessoa.rg'=> array(
					'class'=>'span12',
				),
				'Pessoa.file'=> array(
					'class'=>'span12',
					'type'=>'file'
				),
				'Pessoa.file_dir'=> array(
					'class'=>'span12',
					'type'=>'hidden'
				),
			),
			'Permissão'=>array(
				'Pessoa.password'=>array(
					'class'=>'span12',
				),
				'Pessoa.status'=>array(
					'class'=>'span12',
				),
			),
			'Contato'=>array(
				'Pessoa.carteiratrabalho'=>array(
					'class'=>'span12',
				),
				'Pessoa.estado'=>array(
					'class'=>'span12',
				),
				'Pessoa.cidade'=>array(
					'class'=>'span12',
				),
				'Pessoa.rua'=>array(
					'class'=>'span12',
				),
				'Pessoa.bairro'=>array(
					'class'=>'span12',
				),
				'Pessoa.cep'=>array(
					'class'=>'span12',
				),
				'Pessoa.telefone'=>array(
					'class'=>'span12',
				),
				'Pessoa.datecontratado'=>array(
					'class'=>'span12',
				),
				'Pessoa.premiacoes'=>array(
					'class'=>'span12',
				),
				'Pessoa.updated'=>array(
					'class'=>'span12',
				),
				'Pessoa.created'=>array(
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
