<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Sexo'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabSexo' data-toggle='tab'><?php echo __('Sexo'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabSexo'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($sexo['Sexo']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('nome'); ?></dt>
                <dd>
                    <?php echo h($sexo['Sexo']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('pessoa_count'); ?></dt>
                <dd>
                    <?php echo h($sexo['Sexo']['pessoa_count']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('user_count'); ?></dt>
                <dd>
                    <?php echo h($sexo['Sexo']['user_count']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('user_disable'); ?></dt>
                <dd>
                    <?php echo h($sexo['Sexo']['user_disable']); ?>
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


		<?php 
		echo $this->Link->icon('Users', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($sexo['Pessoa'])): ?>
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
						$sexo['Pessoa'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($sexo['User'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Users
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'User.id',
						'Username' => 'User.username',
						'Email' => 'User.email',
						'Password' => 'User.password',
						'Status' => 'User.status',
						'Sexo Id' => 'User.sexo_id',
						'Group Id' => 'User.group_id',
						'Foto' => 'User.foto',
						'Foto Dir' => 'User.foto_dir',
			);
			echo $this->Table->createTable(
						'User',
						$sexo['User'],
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