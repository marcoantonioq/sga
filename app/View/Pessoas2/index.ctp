<?php $this->extend('/Common/index') ?>

<?php $this->assign('title', 'Pessoa'); ?>

<?php $this->start('contents'); ?>
    <?php
		$displayFields = array(
			'Id' => 'Pessoa.id',
			'Nome' => 'Pessoa.name',
			'Telefone'=>'Pessoa.telefone',
			'Sexo'=>'Sexo.nome',
			'Grupo'=>'Group.name',
		);

		echo $this->Table->createTableForm(
			'Pessoa',
			$pessoas,
			$displayFields,
			$actions,
			'<h3>Atualmente você não tem propriedades enumeradas</h3>'
		);
	?>

<?php $this->end(); ?>
