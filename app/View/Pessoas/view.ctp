<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Pessoa'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabPessoa' data-toggle='tab'><?php echo __('Pessoa'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabPessoa'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('name')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['name']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('username')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['username']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Sexo')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pessoa['Sexo']['nome'], array('controller' => 'sexos', 'action' => 'view', $pessoa['Sexo']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('email')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['email']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('password')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['password']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('status')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['status']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('contabanco')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['contabanco']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nascimento')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['nascimento']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('carteiratrabalho')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['carteiratrabalho']); ?>
                    &nbsp;
                </dd>
				<!-- <dt><?php echo ucfirst(__('anexo')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['anexo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('anexo_dir')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['anexo_dir']); ?>
                    &nbsp;
                </dd> -->
				<dt><?php echo ucfirst(__('cpf')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['cpf']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('rg')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['rg']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('estado')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['estado']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cidade')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['cidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('rua')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['rua']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('bairro')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['bairro']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cep')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['cep']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('telefone')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['telefone']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('datecontratado')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['datecontratado']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('premiacoes')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['premiacoes']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('ParentPessoa')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pessoa['ParentPessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $pessoa['ParentPessoa']['id'])); ?>
                    &nbsp;
                </dd>
				<!-- <dt><?php echo ucfirst(__('lft')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['lft']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('rght')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['rght']); ?>
                    &nbsp;
                </dd> -->
				<!-- <dt><?php echo ucfirst(__('foto')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['foto']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('foto_dir')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['foto_dir']); ?>
                    &nbsp;
                </dd> -->
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['updated']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($pessoa['Pessoa']['created']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Sexos', 
			'bended_arrow_left',
			array('controller' => 'sexos', 'action' => 'index'),
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


		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Cargos', 
			'bended_arrow_left',
			array('controller' => 'cargos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($pessoa['ChildPessoa'])): ?>
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
						'Id' => 'ChildPessoa.id',
						'Name' => 'ChildPessoa.name',
						'Username' => 'ChildPessoa.username',
						'Sexo Id' => 'ChildPessoa.sexo_id',
						'Email' => 'ChildPessoa.email',
						'Password' => 'ChildPessoa.password',
						'Status' => 'ChildPessoa.status',
						'Contabanco' => 'ChildPessoa.contabanco',
						'Nascimento' => 'ChildPessoa.nascimento',
						'Carteiratrabalho' => 'ChildPessoa.carteiratrabalho',
						'Anexo' => 'ChildPessoa.anexo',
						'Anexo Dir' => 'ChildPessoa.anexo_dir',
						'Cpf' => 'ChildPessoa.cpf',
						'Rg' => 'ChildPessoa.rg',
						'Estado' => 'ChildPessoa.estado',
						'Cidade' => 'ChildPessoa.cidade',
						'Rua' => 'ChildPessoa.rua',
						'Bairro' => 'ChildPessoa.bairro',
						'Cep' => 'ChildPessoa.cep',
						'Telefone' => 'ChildPessoa.telefone',
						'Datecontratado' => 'ChildPessoa.datecontratado',
						'Premiacoes' => 'ChildPessoa.premiacoes',
						'Parent Id' => 'ChildPessoa.parent_id',
						'Lft' => 'ChildPessoa.lft',
						'Rght' => 'ChildPessoa.rght',
						'Foto' => 'ChildPessoa.foto',
						'Foto Dir' => 'ChildPessoa.foto_dir',
						'Updated' => 'ChildPessoa.updated',
						'Created' => 'ChildPessoa.created',
			);
			echo $this->Table->createTable(
						'ChildPessoa',
						$pessoa['ChildPessoa'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($pessoa['Fazenda'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Fazendas
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Fazenda.id',
						'Proprietario' => 'Fazenda.proprietario',
						'Nome' => 'Fazenda.nome',
						'Telefone' => 'Fazenda.telefone',
						'Saldo' => 'Fazenda.saldo',
						'Cnpj' => 'Fazenda.cnpj',
						'Estado' => 'Fazenda.estado',
						'Cidade' => 'Fazenda.cidade',
						'Inscricaoestatual' => 'Fazenda.inscricaoestatual',
						'Fax' => 'Fazenda.fax',
						'Atividades' => 'Fazenda.atividades',
			);
			echo $this->Table->createTable(
						'Fazenda',
						$pessoa['Fazenda'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($pessoa['Cargo'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna3">
				  Cargos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna3" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Cargo.id',
						'Nome' => 'Cargo.nome',
						'Habilidade' => 'Cargo.habilidade',
						'Salario' => 'Cargo.salario',
						'Diasalario' => 'Cargo.diasalario',
						'Pontos' => 'Cargo.pontos',
						'Descricao' => 'Cargo.descricao',
						'Updated' => 'Cargo.updated',
						'Created' => 'Cargo.created',
			);
			echo $this->Table->createTable(
						'Cargo',
						$pessoa['Cargo'],
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