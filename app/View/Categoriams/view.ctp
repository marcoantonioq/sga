<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Categoriam'); ?>

<?php $this->start('contents'); ?>
<?php 
	$fields = array(
		'Categoriam' => array(
			'Id'=>'Categoriam.id',
			'Nome'=>'Categoriam.nome',
			'Descricao'=>'Categoriam.descricao',
		),
	);
	echo $this->Table->tabtable($categoriam, $fields)
?>
<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Almoxarifados', 
			'bended_arrow_left',
			array('controller' => 'almoxarifados', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">


	<div class="accordion" id="accordion1">
		
		<?php if (!empty($categoriam['Almoxarifado'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Almoxarifados
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Almoxarifado.id',
						'Fazenda Id' => 'Almoxarifado.fazenda_id',
						'Fabricante Id' => 'Almoxarifado.fabricante_id',
						'Categoriam Id' => 'Almoxarifado.categoriam_id',
						'Unidade' => 'Almoxarifado.unidade',
						'Valor' => 'Almoxarifado.valor',
						'Comprado' => 'Almoxarifado.comprado',
						'Descricao' => 'Almoxarifado.descricao',
						'Created' => 'Almoxarifado.created',
						'Dose' => 'Almoxarifado.dose',
						'Validade' => 'Almoxarifado.validade',
						'Prescricao' => 'Almoxarifado.prescricao',
			);
			echo $this->Table->createTable(
						'Almoxarifado',
						$categoriam['Almoxarifado'],
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