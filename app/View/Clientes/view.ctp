<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Cliente'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCliente' data-toggle='tab'><?php echo __('Cliente'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCliente'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cpf')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['cpf']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('telefone')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['telefone']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('fax')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['fax']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('email')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['email']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('contato')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['contato']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('rua')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['rua']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('bairro')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['bairro']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('municipio')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['municipio']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('cep')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['cep']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('estato')); ?></dt>
                <dd>
                    <?php echo h($cliente['Cliente']['estato']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('vendas'), 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
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
		
		<?php if (!empty($cliente['Venda'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Vendas'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Venda.id',
						ucfirst(__('produto_id')) => 'Venda.produto_id',
						ucfirst(__('nome')) => 'Venda.nome',
						ucfirst(__('cliente_id')) => 'Venda.cliente_id',
						ucfirst(__('patrimonio_id')) => 'Venda.patrimonio_id',
						ucfirst(__('quantidade')) => 'Venda.quantidade',
						ucfirst(__('valor')) => 'Venda.valor',
						ucfirst(__('pago')) => 'Venda.pago',
						ucfirst(__('emissao')) => 'Venda.emissao',
						ucfirst(__('descricao')) => 'Venda.descricao',
						ucfirst(__('data')) => 'Venda.data',
						ucfirst(__('created')) => 'Venda.created',
						ucfirst(__('updated')) => 'Venda.updated',
			);
			echo $this->Table->createTable(
						'Venda',
						$cliente['Venda'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($cliente['Fazenda'])): ?>
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
						$cliente['Fazenda'],
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