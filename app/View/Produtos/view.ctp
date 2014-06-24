<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Produto'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabProduto' data-toggle='tab'><?php echo __('Produto'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabProduto'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($produto['Produto']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($produto['Produto']['nome']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fabricante')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($produto['Fabricante']['id'], array('controller' => 'fabricantes', 'action' => 'view', $produto['Fabricante']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($produto['Produto']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($produto['Produto']['valor']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fabricantes', 
			'bended_arrow_left',
			array('controller' => 'fabricantes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Vendas', 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($produto['Venda'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Vendas
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Venda.id',
						'Produto Id' => 'Venda.produto_id',
						'Nome' => 'Venda.nome',
						'Cliente Id' => 'Venda.cliente_id',
						'Patrimonio Id' => 'Venda.patrimonio_id',
						'Quantidade' => 'Venda.quantidade',
						'Valor' => 'Venda.valor',
						'Pago' => 'Venda.pago',
						'Emissao' => 'Venda.emissao',
						'Descricao' => 'Venda.descricao',
						'Data' => 'Venda.data',
						'Created' => 'Venda.created',
						'Updated' => 'Venda.updated',
			);
			echo $this->Table->createTable(
						'Venda',
						$produto['Venda'],
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