<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Fornecedore'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFornecedore' data-toggle='tab'><?php echo __('Fornecedore'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFornecedore'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('rua')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['rua']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('bairro')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['bairro']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('municipio')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['municipio']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cep')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['cep']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('estato')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['estato']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('telefone')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['telefone']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('fax')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['fax']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('email')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['email']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cnpj')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['cnpj']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('inscricaoestatual')); ?></dt>
                <dd>
                    <?php echo h($fornecedore['Fornecedore']['inscricaoestatual']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('compras'), 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('fazendas'), 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($fornecedore['Compra'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Compras'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Compra.id',
						ucfirst(__('fornecedore_id')) => 'Compra.fornecedore_id',
						ucfirst(__('nome')) => 'Compra.nome',
						ucfirst(__('quantidade')) => 'Compra.quantidade',
						ucfirst(__('valor')) => 'Compra.valor',
						ucfirst(__('emissao')) => 'Compra.emissao',
						ucfirst(__('pago')) => 'Compra.pago',
						ucfirst(__('descricao')) => 'Compra.descricao',
						ucfirst(__('data')) => 'Compra.data',
						ucfirst(__('created')) => 'Compra.created',
						ucfirst(__('updated')) => 'Compra.updated',
			);
			echo $this->Table->createTable(
						'Compra',
						$fornecedore['Compra'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fornecedore['Fazenda'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  <? echo ucfirst(__('Fazendas'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Fazenda.id',
						ucfirst(__('proprietario')) => 'Fazenda.proprietario',
						ucfirst(__('nome')) => 'Fazenda.nome',
						ucfirst(__('telefone')) => 'Fazenda.telefone',
						ucfirst(__('saldo')) => 'Fazenda.saldo',
						ucfirst(__('cnpj')) => 'Fazenda.cnpj',
						ucfirst(__('estado')) => 'Fazenda.estado',
						ucfirst(__('cidade')) => 'Fazenda.cidade',
						ucfirst(__('inscricaoestatual')) => 'Fazenda.inscricaoestatual',
						ucfirst(__('fax')) => 'Fazenda.fax',
						ucfirst(__('atividades')) => 'Fazenda.atividades',
			);
			echo $this->Table->createTable(
						'Fazenda',
						$fornecedore['Fazenda'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>