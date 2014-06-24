<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Compra'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCompra' data-toggle='tab'><?php echo __('Compra'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCompra'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fornecedore')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($compra['Fornecedore']['nome'], array('controller' => 'fornecedores', 'action' => 'view', $compra['Fornecedore']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('quantidade')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['quantidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('emissao')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['emissao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('pago')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['pago']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($compra['Compra']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('fornecedores'), 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('patrimonios'), 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('centralcustos'), 
			'bended_arrow_left',
			array('controller' => 'centralcustos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($compra['Patrimonio'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Patrimonios'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Patrimonio.id',
						ucfirst(__('nome')) => 'Patrimonio.nome',
						ucfirst(__('fabricante_id')) => 'Patrimonio.fabricante_id',
						ucfirst(__('fazenda_id')) => 'Patrimonio.fazenda_id',
						ucfirst(__('categoriap_id')) => 'Patrimonio.categoriap_id',
						ucfirst(__('compra_id')) => 'Patrimonio.compra_id',
						ucfirst(__('unidade')) => 'Patrimonio.unidade',
						ucfirst(__('valor')) => 'Patrimonio.valor',
						ucfirst(__('comprado')) => 'Patrimonio.comprado',
						ucfirst(__('depreciacao')) => 'Patrimonio.depreciacao',
						ucfirst(__('descricao')) => 'Patrimonio.descricao',
						ucfirst(__('created')) => 'Patrimonio.created',
			);
			echo $this->Table->createTable(
						'Patrimonio',
						$compra['Patrimonio'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($compra['Centralcusto'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  <? echo ucfirst(__('Centralcustos'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Centralcusto.id',
						ucfirst(__('mes')) => 'Centralcusto.mes',
						ucfirst(__('quantidade')) => 'Centralcusto.quantidade',
						ucfirst(__('custofixo')) => 'Centralcusto.custofixo',
						ucfirst(__('outrosvalores')) => 'Centralcusto.outrosvalores',
						ucfirst(__('custovariavel')) => 'Centralcusto.custovariavel',
						ucfirst(__('descricao')) => 'Centralcusto.descricao',
						ucfirst(__('created')) => 'Centralcusto.created',
						ucfirst(__('updated')) => 'Centralcusto.updated',
			);
			echo $this->Table->createTable(
						'Centralcusto',
						$compra['Centralcusto'],
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