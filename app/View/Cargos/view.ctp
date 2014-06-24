<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Cargo'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCargo' data-toggle='tab'>Cargo</a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCargo'> 
			<dl>
				<dt>Id</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['id']); ?>
                    &nbsp;
                </dd>
				<dt>Nome</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['nome']); ?>
                    &nbsp;
                </dd>
				<dt>Habilidade</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['habilidade']); ?>
                    &nbsp;
                </dd>
				<dt>Salário</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['salario']); ?>
                    &nbsp;
                </dd>
				<dt>Dia salário</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['diasalario']); ?>
                    &nbsp;
                </dd>
				<dt>Pontos</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['pontos']); ?>
                    &nbsp;
                </dd>
				<dt>Descrição</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt>Atualizado em</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['updated']); ?>
                    &nbsp;
                </dd>
				<dt>Criado em</dt>
                <dd>
                    <?php echo h($cargo['Cargo']['created']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($cargo['Pessoa'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Pessoas
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Pessoa.id',
						'Name' => 'Pessoa.name',
						'Username' => 'Pessoa.username',
						'Sexo Id' => 'Pessoa.sexo_id',
						'Email' => 'Pessoa.email',
						'Password' => 'Pessoa.password',
						'Status' => 'Pessoa.status',
						'Contabanco' => 'Pessoa.contabanco',
						'Nascimento' => 'Pessoa.nascimento',
						'Carteiratrabalho' => 'Pessoa.carteiratrabalho',
						'Anexo' => 'Pessoa.anexo',
						'Anexo Dir' => 'Pessoa.anexo_dir',
						'Cpf' => 'Pessoa.cpf',
						'Rg' => 'Pessoa.rg',
						'Estado' => 'Pessoa.estado',
						'Cidade' => 'Pessoa.cidade',
						'Rua' => 'Pessoa.rua',
						'Bairro' => 'Pessoa.bairro',
						'Cep' => 'Pessoa.cep',
						'Telefone' => 'Pessoa.telefone',
						'Datecontratado' => 'Pessoa.datecontratado',
						'Premiacoes' => 'Pessoa.premiacoes',
						'Parent Id' => 'Pessoa.parent_id',
						'Lft' => 'Pessoa.lft',
						'Rght' => 'Pessoa.rght',
						'Foto' => 'Pessoa.foto',
						'Foto Dir' => 'Pessoa.foto_dir',
						'Updated' => 'Pessoa.updated',
						'Created' => 'Pessoa.created',
			);
			echo $this->Table->createTable(
						'Pessoa',
						$cargo['Pessoa'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>