<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Centralcusto'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCentralcusto' data-toggle='tab'><?php echo __('Centralcusto'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCentralcusto'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('mes')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['mes']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('caixa')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['caixa']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('Outras entradas')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['entrada']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('fechamento')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['fechamento']); ?>
                    &nbsp;
                </dd>
				<!-- <dt><?php echo ucfirst(__('quantidade')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['quantidade']); ?>
                    &nbsp;
                </dd> -->
				<dt><?php echo ucfirst(__('custofixo')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['custofixo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('outrosvalores')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['outrosvalores']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('custovariavel')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['custovariavel']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($centralcusto['Centralcusto']['updated']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('status')); ?></dt>
                <dd>
                    <?php echo ($centralcusto['Centralcusto']['status'])?"Fechado":"Aberto"; ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('custos')), 
			'bended_arrow_left',
			array('controller' => 'custos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('compras')), 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('vendas')), 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php 
			// pr($centralcusto['Custo']); 
			$total_custo = 0;
			foreach ($centralcusto['Custo'] as $custo) {
				$total_custo += $custo['valor'];
			}
		?>
		<?php if (!empty($centralcusto['Custo'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Custos')) ?> Total: R$ <?= $total_custo; ?>
				 <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Custo.id',
						ucfirst(__('centralcusto_id')) => 'Custo.centralcusto_id',
						ucfirst(__('item')) => 'Custo.item',
						ucfirst(__('valor')) => 'Custo.valor',
						ucfirst(__('descricao')) => 'Custo.descricao',
			);
			echo $this->Table->createTable(
						'Custo',
						$centralcusto['Custo'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	   	<?php $total_compra = 0; ?>

	
		<?php if (!empty($centralcusto['Compra'])): ?>
			<?php 
				// pr($centralcusto['Compra']); 
				foreach ($centralcusto['Compra'] as $compra) {
					$total_compra += $compra['valor'];
				}
			?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  <? echo ucfirst(__('Compras'))?> Total: R$ <?= $total_compra; ?>
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
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
						$centralcusto['Compra'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	   	<?php $total_venda = 0; ?>
	
		<?php if (!empty($centralcusto['Venda'])): ?>
			<?php 
				// pr($centralcusto['Venda']); 
				foreach ($centralcusto['Venda'] as $venda) {
					$total_venda += $venda['valor'];
				}
			?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna3">
				  <? echo ucfirst(__('Venda'))?> Total: R$ <?= $total_venda ?>;
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna3" class="accordion-body collapse" style="height: 0px; ">
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
						$centralcusto['Venda'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	   	<?php $total_fornecimento = 0; ?>

	   	<?php if (!empty($fornecimento)): ?>
	   		<?php 
				// pr($fornecimento); 
				foreach ($fornecimento as $fornecido) {
					$preco = $fornecido['Fornecimento']['preco'];
					$quantidade = $fornecido['Fornecimento']['quantidade'];
					$valor = $preco * $quantidade;
					$total_fornecimento += $valor;
				}
			?>
	   	<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#fornecimento">
				  <? echo ucfirst(__('Fornecimentos'))?> Total: R$ <?= $total_fornecimento; ?>
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="fornecimento" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <table class="responsive table table-bordered">
				  	<thead>
				  		<tr>
				  			<th>ID</th>
				  			<th>Nome</th>
				  			<th>Retiro</th>
				  			<th>Data</th>
				  			<th>Quantidade</th>
				  			<th>Preço</th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php foreach ($fornecimento as $fornecido): ?>
				  		<tr>
				  			<td><?php echo $fornecido['Fornecimento']['id']; ?></td>
				  			<td><?php echo $fornecido['Fornecimento']['nome']; ?></td>
				  			<td><?php echo $fornecido['Retiro']['nome']; ?></td>
				  			<td><?php echo $fornecido['Fornecimento']['data']; ?></td>
				  			<td><?php echo $fornecido['Fornecimento']['quantidade']; ?></td>
				  			<td><?php echo $fornecido['Fornecimento']['preco']; ?></td>
				  		</tr>
				  		<?php endforeach; ?>
				  	</tbody>
				  </table>
				</div>
			</div>
		</div>

	   	<?php endif; ?>
		</div>

		<table class="responsive table table-bordered">
			<caption>Caixa</caption>
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Entrada: </td>
					<td>
						<?php echo $entrada = array_sum(array(
							$total_fornecimento, 
							$total_venda,
							$centralcusto['Centralcusto']['caixa'],
							$centralcusto['Centralcusto']['entrada'],
						)); ?> 
					</td>
				</tr>
				<tr>
					<td>Saida: </td>
					<td>
						<?php echo $saida = array_sum(array(
							$total_compra, 
							$total_custo,
							$centralcusto['Centralcusto']['custofixo'],
							$centralcusto['Centralcusto']['outrosvalores'],
							$centralcusto['Centralcusto']['custovariavel'],
						)); ?> 
					</td>
				</tr>
				<tr>
					<th>Total:</th>
					<td>R$ <?php echo $entrada - $saida; ?></td>
				</tr>
			</tbody>
		</table>
</div>
<?php $this->end(); ?>