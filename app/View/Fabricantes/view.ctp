<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Fabricante'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFabricante' data-toggle='tab'><?php echo __('Fabricante'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFabricante'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($fabricante['Fabricante']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($fabricante['Fabricante']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('telefone')); ?></dt>
                <dd>
                    <?php echo h($fabricante['Fabricante']['telefone']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('contato')); ?></dt>
                <dd>
                    <?php echo h($fabricante['Fabricante']['contato']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($fabricante['Fabricante']['descricao']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Medicamentos', 
			'bended_arrow_left',
			array('controller' => 'medicamentos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Produtos', 
			'bended_arrow_left',
			array('controller' => 'produtos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($fabricante['Medicamento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Medicamentos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Medicamento.id',
						'Fazenda Id' => 'Medicamento.fazenda_id',
						'Fabricante Id' => 'Medicamento.fabricante_id',
						'Nome' => 'Medicamento.nome',
						'Categoria' => 'Medicamento.categoria',
						'Notafiscal' => 'Medicamento.notafiscal',
						'Unidade' => 'Medicamento.unidade',
						'Valor' => 'Medicamento.valor',
						'Comprado' => 'Medicamento.comprado',
						'Descricao' => 'Medicamento.descricao',
						'Created' => 'Medicamento.created',
						'Dose' => 'Medicamento.dose',
						'Validade' => 'Medicamento.validade',
						'Prescricao' => 'Medicamento.prescricao',
			);
			echo $this->Table->createTable(
						'Medicamento',
						$fabricante['Medicamento'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fabricante['Patrimonio'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Patrimonios
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Patrimonio.id',
						'Fabricante Id' => 'Patrimonio.fabricante_id',
						'Fazenda Id' => 'Patrimonio.fazenda_id',
						'Categoriap Id' => 'Patrimonio.categoriap_id',
						'Compra Id' => 'Patrimonio.compra_id',
						'Unidade' => 'Patrimonio.unidade',
						'Valor' => 'Patrimonio.valor',
						'Comprado' => 'Patrimonio.comprado',
						'Depreciacao' => 'Patrimonio.depreciacao',
						'Descricao' => 'Patrimonio.descricao',
						'Created' => 'Patrimonio.created',
			);
			echo $this->Table->createTable(
						'Patrimonio',
						$fabricante['Patrimonio'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($fabricante['Produto'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna3">
				  Produtos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna3" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Produto.id',
						'Nome' => 'Produto.nome',
						'Fabricante Id' => 'Produto.fabricante_id',
						'Descricao' => 'Produto.descricao',
						'Valor' => 'Produto.valor',
			);
			echo $this->Table->createTable(
						'Produto',
						$fabricante['Produto'],
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