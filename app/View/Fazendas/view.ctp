<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Fazenda'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFazenda' data-toggle='tab'><?php echo ucfirst(__('Fazenda')); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFazenda'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('proprietario')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['proprietario']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('telefone')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['telefone']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('saldo')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['saldo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cnpj')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['cnpj']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('estado')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['estado']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cidade')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['cidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('inscricaoestatual')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['inscricaoestatual']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('fax')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['fax']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('atividades')); ?></dt>
                <dd>
                    <?php echo h($fazenda['Fazenda']['atividades']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Accounts', 
			'bended_arrow_left',
			array('controller' => 'accounts', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Calendarios', 
			'bended_arrow_left',
			array('controller' => 'calendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Medicamentos', 
			'bended_arrow_left',
			array('controller' => 'medicamentos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Retiros', 
			'bended_arrow_left',
			array('controller' => 'retiros', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Clientes', 
			'bended_arrow_left',
			array('controller' => 'clientes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Fornecedores', 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


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
		
		<?php if (!empty($fazenda['Account'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Accounts
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Account.id',
						'Fazenda Id' => 'Account.fazenda_id',
						'Banco' => 'Account.banco',
						'Agencia' => 'Account.agencia',
						'Numero' => 'Account.numero',
						'Descricao' => 'Account.descricao',
			);
			echo $this->Table->createTable(
						'Account',
						$fazenda['Account'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Calendario'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Calendarios
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Calendario.id',
						'Fazenda Id' => 'Calendario.fazenda_id',
						'Titulo' => 'Calendario.titulo',
						'Inicio' => 'Calendario.inicio',
						'Termino' => 'Calendario.termino',
						'Observacoes' => 'Calendario.observacoes',
						'Categoriacalendario Id' => 'Calendario.categoriacalendario_id',
			);
			echo $this->Table->createTable(
						'Calendario',
						$fazenda['Calendario'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Medicamento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna3">
				  Medicamentos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna3" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Medicamento.id',
						'Fazenda Id' => 'Medicamento.fazenda_id',
						'Fabricante Id' => 'Medicamento.fabricante_id',
						'Nome' => 'Medicamento.nome',
						'Categoria' => 'Medicamento.categoria',
						'Notafiscal' => 'Medicamento.notafiscal',
						'Unidade' => 'Medicamento.unidade',
						'Valor' => 'Medicamento.valor',
						'Comprado' => 'Medicamento.comprado',
						'Descricao' => 'Medicamento.descricao',
						'Created' => 'Medicamento.created',
						'Dose' => 'Medicamento.dose',
						'Validade' => 'Medicamento.validade',
						'Prescricao' => 'Medicamento.prescricao',
			);
			echo $this->Table->createTable(
						'Medicamento',
						$fazenda['Medicamento'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Patrimonio'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna4">
				  Patrimonios
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna4" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Patrimonio.id',
						'Fabricante Id' => 'Patrimonio.fabricante_id',
						'Fazenda Id' => 'Patrimonio.fazenda_id',
						'Categoriap Id' => 'Patrimonio.categoriap_id',
						'Compra Id' => 'Patrimonio.compra_id',
						'Unidade' => 'Patrimonio.unidade',
						'Valor' => 'Patrimonio.valor',
						'Comprado' => 'Patrimonio.comprado',
						'Depreciacao' => 'Patrimonio.depreciacao',
						'Descricao' => 'Patrimonio.descricao',
						'Created' => 'Patrimonio.created',
			);
			echo $this->Table->createTable(
						'Patrimonio',
						$fazenda['Patrimonio'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Retiro'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna5">
				  Retiros
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna5" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Retiro.id',
						'Fazenda Id' => 'Retiro.fazenda_id',
						'Nome' => 'Retiro.nome',
						'Cod Ordenha' => 'Retiro.cod_ordenha',
						'Descricao' => 'Retiro.descricao',
						'Created' => 'Retiro.created',
						'Updated' => 'Retiro.updated',
			);
			echo $this->Table->createTable(
						'Retiro',
						$fazenda['Retiro'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Cliente'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna6">
				  Clientes
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna6" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Cliente.id',
						'Cpf' => 'Cliente.cpf',
						'Nome' => 'Cliente.nome',
						'Telefone' => 'Cliente.telefone',
						'Fax' => 'Cliente.fax',
						'Email' => 'Cliente.email',
						'Contato' => 'Cliente.contato',
						'Rua' => 'Cliente.rua',
						'Bairro' => 'Cliente.bairro',
						'Municipio' => 'Cliente.municipio',
						'Cep' => 'Cliente.cep',
						'Estato' => 'Cliente.estato',
			);
			echo $this->Table->createTable(
						'Cliente',
						$fazenda['Cliente'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Fornecedore'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna7">
				  Fornecedores
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna7" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Fornecedore.id',
						'Nome' => 'Fornecedore.nome',
						'Rua' => 'Fornecedore.rua',
						'Bairro' => 'Fornecedore.bairro',
						'Municipio' => 'Fornecedore.municipio',
						'Cep' => 'Fornecedore.cep',
						'Estato' => 'Fornecedore.estato',
						'Telefone' => 'Fornecedore.telefone',
						'Fax' => 'Fornecedore.fax',
						'Email' => 'Fornecedore.email',
						'Cnpj' => 'Fornecedore.cnpj',
						'Inscricaoestatual' => 'Fornecedore.inscricaoestatual',
			);
			echo $this->Table->createTable(
						'Fornecedore',
						$fazenda['Fornecedore'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fazenda['Pessoa'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna8">
				  Pessoas
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna8" class="accordion-body collapse" style="height: 0px; ">
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
						$fazenda['Pessoa'],
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