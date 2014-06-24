<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Venda'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabVenda' data-toggle='tab'><?php echo __('Venda'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabVenda'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Produto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($venda['Produto']['nome'], array('controller' => 'produtos', 'action' => 'view', $venda['Produto']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['nome']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Cliente')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($venda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $venda['Cliente']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Patrimonio')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($venda['Patrimonio']['nome'], array('controller' => 'patrimonios', 'action' => 'view', $venda['Patrimonio']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('quantidade')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['quantidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('pago')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['pago']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('emissao')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['emissao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($venda['Venda']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('produtos'), 
			'bended_arrow_left',
			array('controller' => 'produtos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('clientes'), 
			'bended_arrow_left',
			array('controller' => 'clientes', 'action' => 'index'),
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
		
		<?php if (!empty($venda['Centralcusto'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Centralcustos'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
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
						$venda['Centralcusto'],
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