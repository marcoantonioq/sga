<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Patrimonio'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabPatrimonio' data-toggle='tab'><?php echo __('Patrimonio'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabPatrimonio'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['nome']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fabricante')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($patrimonio['Fabricante']['nome'], array('controller' => 'fabricantes', 'action' => 'view', $patrimonio['Fabricante']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fazenda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($patrimonio['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $patrimonio['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Categoriap')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($patrimonio['Categoriap']['nome'], array('controller' => 'categoriaps', 'action' => 'view', $patrimonio['Categoriap']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Compra')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($patrimonio['Compra']['id'], array('controller' => 'compras', 'action' => 'view', $patrimonio['Compra']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('unidade')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['unidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('comprado')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['comprado']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('depreciacao')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['depreciacao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($patrimonio['Patrimonio']['created']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('fabricantes'), 
			'bended_arrow_left',
			array('controller' => 'fabricantes', 'action' => 'index'),
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


		<?php 
		echo $this->Link->icon(__('categoriaps'), 
			'bended_arrow_left',
			array('controller' => 'categoriaps', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('compras'), 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('vendas'), 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($patrimonio['Venda'])): ?>
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
						$patrimonio['Venda'],
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