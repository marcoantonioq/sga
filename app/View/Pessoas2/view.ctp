<?php $this->extend('/Common/view') ?>

<?php $this->assign('title', 'Pessoa'); ?>

<?php $this->start('contents'); ?>
	<?php
		$fields = array(
			'Pessoa'=>array(
				'Nome'=> 'Pessoa.name',
				'Sobrenome'=>'Pessoa.username',
				'Sexo'=>'Sexo.nome',
				'Grupo'=>'Group.name',
				'Email'=>'Pessoa.email',
				'Conta'=>'Pessoa.contabanco',
				'Nascimento'=>'Pessoa.nascimento',
				'CPF'=>'Pessoa.cpf',
				'RG'=>'Pessoa.rg',
			),
			'Permissão'=>array(
				'Senha'=>'Pessoa.password',
				'Status'=>'Pessoa.status',			
			),
			'Contato'=>array(
				'Carteira'=>'Pessoa.carteiratrabalho',
				'Estado'=>'Pessoa.estado',
				'Cidate'=>'Pessoa.cidade',
				'Rua'=>'Pessoa.rua',
				'Bairro'=>'Pessoa.bairro',
				'CEP'=>'Pessoa.cep',
				'Telefone'=>'Pessoa.telefone',
				'Data contrado'=>'Pessoa.datecontratado',
				'Primiações'=>'Pessoa.premiacoes',
				'Atualizado'=>'Pessoa.updated',
				'Criado em'=>'Pessoa.created',
			)
		);
		echo $this->Table->tabtable($pessoa, $fields);
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
		</ul>
	<?php $this->end(); ?>

	<div class="page-header">
        <h4>Relacionados</h4>
    </div>
    <div class="accordion pattern" id="accordion3">
    	
		<?php if (!empty($pessoa['Ocorrencia'])): ?>
	    <div class="accordion-group">
	      <div class="accordion-heading">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#Three">
	          Ocorrencias
	        <span class="icon12 entypo-icon-minus-2 gray"></span></a>
	      </div>
	      <div id="Three" class="accordion-body in collapse" style="height: auto;">
	        <div class="accordion-inner">
	        	<?php 
	        	$displayFields = array(
					'Id' => 'id',
					'Nome' => 'nome',
					'Data inicial'=>'datainicial',
					'Data final'=>'datafinal',
					'Criado em'=>'created',
					'Atualizado'=>'updated',
				);
				 
				echo $this->Table->createTableForm(
					'Ocorrencia',
					$pessoa['Ocorrencia'],
					$displayFields,
					null,
					'<h3>Atualmente você não tem propriedades enumeradas</h3>'
				);
	        	?>
	        </div>
	      </div>
	    </div>
		<?php endif; ?>	          

		<?php if (!empty($pessoa['ChildPessoa'])): ?>
	    <div class="accordion-group">
	      <div class="accordion-heading">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#One">
	          Pessoa
	        <span class="icon12 entypo-icon-plus-2 gray"></span></a>
	      </div>
	      <div id="One" class="accordion-body collapse" style="height: 0px;">
	        <div class="accordion-inner">
	        	<?php
					$displayFields = array(
						'Id' => 'Pessoa.id',
						'Nome' => 'Pessoa.name',
						'Telefone'=>'Pessoa.telefone',
						'Sexo'=>'Sexo.nome',
						'Grupo'=>'Group.name',
					);
					 
					$actions = array(
						'Ver' => array(
							'/pessoas/view/', 'Pessoa.id'
						),
						'Editar' => array(
							'/pessoas/edit/', 'Pessoa.id'
						)
					);

					$setings = array(
						'title' => 'Pessoas'
					);
					 
					echo $this->Table->createTableForm(
						'Pessoa',
						$pessoa['Pessoa'],
						$displayFields,
						$actions,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>',
						$setings
					);
				?>
	        </div>
	      </div>
	    </div>
		<?php endif; ?>


		<?php if (!empty($pessoa['Position'])): ?>
	    <div class="accordion-group">
	      <div class="accordion-heading">
	        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#One">
	          Positions
	        <span class="icon12 entypo-icon-plus-2 gray"></span></a>
	      </div>
	      <div id="One" class="accordion-body collapse" style="height: 0px;">
	        <div class="accordion-inner">
				<table cellpadding = "0" cellspacing = "0">
				<tr>
					<th><?php echo __('Id'); ?></th>
					<th><?php echo __('Nome'); ?></th>
					<th><?php echo __('Habilidade'); ?></th>
					<th><?php echo __('Salario'); ?></th>
					<th><?php echo __('Diasalario'); ?></th>
					<th><?php echo __('Pontos'); ?></th>
					<th><?php echo __('Descricao'); ?></th>
					<th><?php echo __('Updated'); ?></th>
					<th><?php echo __('Created'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php foreach ($pessoa['Position'] as $position): ?>
					<tr>
						<td><?php echo $position['id']; ?></td>
						<td><?php echo $position['nome']; ?></td>
						<td><?php echo $position['habilidade']; ?></td>
						<td><?php echo $position['salario']; ?></td>
						<td><?php echo $position['diasalario']; ?></td>
						<td><?php echo $position['pontos']; ?></td>
						<td><?php echo $position['descricao']; ?></td>
						<td><?php echo $position['updated']; ?></td>
						<td><?php echo $position['created']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'positions', 'action' => 'view', $position['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'positions', 'action' => 'edit', $position['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'positions', 'action' => 'delete', $position['id']), null, __('Are you sure you want to delete # %s?', $position['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
	        </div>
	      </div>
	    </div>
		<?php endif; ?>
	</div>

<?php $this->end(); ?>