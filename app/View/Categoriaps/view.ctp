<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Categoriap'); ?>

<?php $this->start('contents'); ?>
<?php 
	$fields = array(
		'Categoriap' => array(
			'Id'=>'Categoriap.id',
			'Nome'=>'Categoriap.nome',
			'Descricao'=>'Categoriap.descricao',
		),
	);
	echo $this->Table->tabtable($categoriap, $fields)
?>
<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Patrimonios', 
			'bended_arrow_left',
			array('controller' => 'patrimonios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">


	<div class="accordion" id="accordion1">
		
		<?php if (!empty($categoriap['Patrimonio'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Patrimonios
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Patrimonio.id',
						'Fabricante Id' => 'Patrimonio.fabricante_id',
						'Fazenda Id' => 'Patrimonio.fazenda_id',
						'Categoriap Id' => 'Patrimonio.categoriap_id',
						'Unidade' => 'Patrimonio.unidade',
						'Valor' => 'Patrimonio.valor',
						'Comprado' => 'Patrimonio.comprado',
						'Descricao' => 'Patrimonio.descricao',
						'Created' => 'Patrimonio.created',
			);
			echo $this->Table->createTable(
						'Patrimonio',
						$categoriap['Patrimonio'],
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