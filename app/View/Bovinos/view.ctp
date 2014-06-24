<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Bovino'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabBovino' data-toggle='tab'>Bovino</a>
        </li>
        <li>
        	<a href='#Manejo' data-toggle='tab'>Detalhes</a>
        </li>
        <li>
        	<a href='#Financeiro' data-toggle='tab'>Financeiro</a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabBovino'> 
			<dl>
				<dt>Id</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['id']); ?>
                    &nbsp;
                </dd>
                <dt>Brinco</dt>
                <dd>
                    <?php echo ($bovino['Bovino']['nbrinco'])?$bovino['Bovino']['nbrinco']:"S/N"; ?>
                    &nbsp;
                </dd>
				<dt>Nome</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['nome']); ?>
                    &nbsp;
                </dd>
                <dt>Categoria</dt>
                <dd>
                    <?php echo $this->Html->link($bovino['Categoriab']['nome'], array('controller' => 'categoriabs', 'action' => 'view', $bovino['Categoriab']['id'])); ?>
                    &nbsp;
                </dd>                
                <dt>Sexo</dt>
                <dd>
                    <?php echo $this->Html->link($bovino['Sexobovino']['nome'], array('controller' => 'sexobovinos', 'action' => 'view', $bovino['Sexobovino']['id'])); ?>
                    &nbsp;
                </dd>
				<dt>Nascimento</dt>
                <dd>
                    <?php echo $this->Date->datetime($bovino['Bovino']['nascimento']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>

		<div class="tab-pane" id="Manejo">
			<dl>
			<dt>Pasto</dt>
                <dd>
                    <?php echo $this->Html->link($bovino['Pasto']['nome'], array('controller' => 'pastos', 'action' => 'view', $bovino['Pasto']['id'])); ?>
                    &nbsp;
                </dd>
                <dt>Pelagem</dt>
                <dd>
                    <?php echo $this->Html->link($bovino['Pelagen']['nome'], array('controller' => 'pelagens', 'action' => 'view', $bovino['Pelagen']['id'])); ?>
                    &nbsp;
                </dd>
				<dt>Desaleitamento</dt>
                <dd>
                    <?php echo ($bovino['Bovino']['desaleitamento']) ? "Sim": "Não"; ?>
                    &nbsp;
                </dd>
				
				<dt>Status</dt>
                <dd>
                    <?php echo $this->Link->status($bovino['Bovino']['status']); ?>
                    &nbsp;
                </dd>
				<dt>Cria</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['cria']); ?>
                    &nbsp;
                </dd>
				<dt>Criado em</dt>
                <dd>
                    <?php echo $this->Date->datetime($bovino['Bovino']['created']); ?>
                    &nbsp;
                </dd>
				<dt>Cascos normais</dt>
                <dd>
                    <?php echo $bovino['Bovino']['cascosnormais']; ?>
                    &nbsp;
                </dd>
				<dt>Atualizado em</dt>
                <dd>
                    <?php echo $this->Date->datetime($bovino['Bovino']['updated']); ?>
                    &nbsp;
                </dd>
				<dt>Descrição</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['descricao']); ?>
                    &nbsp;
                </dd>
			</dl>
			<?php echo $this->element('system/organograma', compact('heranca'));  ?>
		</div>

		<div class="tab-pane" id="Financeiro">
			<dl>
                <dt>Valor (R$)</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['preco']); ?>
                    &nbsp;
                </dd>
				
				<?php if (!empty($bovino['Bovino']['idvenda'])): ?>				
				<dt>ID Venda</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['idvenda']); ?>
                    &nbsp;
                </dd>
				<?php endif ?>

				<?php if (!empty($bovino['Bovino']['idcompra'])): ?>
				
				<dt>ID Compra</dt>
                <dd>
                    <?php echo h($bovino['Bovino']['idcompra']); ?>
                    &nbsp;
                </dd>
				<?php endif ?>
			</dl>
		</div>
		
	</div>
</div>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Pastos', 
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Categoria animais', 
			'bended_arrow_left',
			array('controller' => 'categoriabs', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

		<?php 
		echo $this->Link->icon('Pelagens', 
			'bended_arrow_left',
			array('controller' => 'pelagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

		<?php 
		echo $this->Link->icon('Garrotes / Cria',
			'bended_arrow_left',
			array('controller' => 'garrotes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Eventos/Ocorrências', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pesagens de animais', 
			'bended_arrow_left',
			array('controller' => 'pesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Leite pesagens', 
			'bended_arrow_left',
			array('controller' => 'leitepesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Movimentação de animais', 
			'bended_arrow_left',
			array('controller' => 'movbovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Inseminação', 
			'bended_arrow_left',
			array('controller' => 'ics', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Raças', 
			'bended_arrow_left',
			array('controller' => 'racas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);

		echo $this->Link->icon('Bovinos / Raças', 
			'bended_arrow_left',
			array('controller' => 'bovinos_racas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>

<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($bovino['Evento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Eventos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  

					<table class='responsive table table-bordered' id='checkAll'>
					<thead>
						<tr>
								<th>STATUS</th>
								<th>NOME</th>
								<th>DATAINICIAL</th>
								<th>DATAFINAL</th>
								<th>REGISTRADO EM</th>
								<th class="actions"><?php echo __('Ações'); ?></th>
							<th id='masterCh' class='ch'>
								<input type='checkbox' name='{Evento}' value='all' class='styled' />
							</th>
						</tr>
					</thead>
						<?php foreach ($bovino['Evento'] as $evento): ?>
						<?php //pr($evento); ?>
						<tr>
							<td><?php echo $evento['status']; ?>&nbsp;</td>
							<td><?php echo h($evento['nome']); ?>&nbsp;</td>
							<td><?php echo h($evento['datainicial']); ?>&nbsp;</td>
							<td><?php echo h($evento['datamax']); ?>&nbsp;</td>
							<td><?php echo h($evento['created']); ?>&nbsp;</td>
							<td class="actions">

								<?php echo $this->Html->link( 
									"<span class='icon12 brocco-icon-search'></span>", 
									array('action' => 'view', $evento['id']), 
									array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
								 ); ?>

								<?php echo $this->Form->postLink(
									"<span class='icon12 icomoon-icon-remove'></span>", 
									array('controller'=>'bovinos_eventos','action' => 'delete', $evento['BovinosEvento']['id']), 
									array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
									__('Tem certeza de que deseja excluir?', $evento['id'])
								); ?>

							</td>

							<td class="chChildren">
								<?php echo $this->Form->checkbox('row.'.$evento['id'], array( 'class'=>'styled' ));?>
							</td>
						</tr>
					<?php endforeach; ?>
					</table>


				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($bovino['Pesagen'])): ?>

			<?php 
            $grafico = '<script type="text/javascript">
            window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
            {
                theme: "theme2",    
                title:{
                    text: "Pesagem"
                },
                data: [
                {        
                    type: "spline",

                    dataPoints: [
            ';
            foreach ($bovino['Pesagen'] as $key => $value) {
                // echo date('Y, m, d', strtotime($value['data']))." : ".$value['peso']."<br>";
                $grafico .="{ x: new Date(".date('Y, m, d', strtotime('-1 month', strtotime($value['data'])))."), y: ".$value['peso']." },";
                
            }
            $grafico .= '
                    ]
                    }       

                    ]
                });

            chart.render();
            }
            </script>';
            echo $grafico;
            ?>

		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Pesagens
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
					<div class="content">                            
                      <div id="chartContainer" style="height: 300px; width: 100%;">
                      </div>
                </div>
				  <?php 
			$displayFields = array(
						'Id' => 'Pesagen.id',
						'Peso' => 'Pesagen.peso',
						'Data' => 'Pesagen.data',
						'Pasto Id' => 'Pesagen.pasto_id',
						'Descricao' => 'Pesagen.descricao',
						'Title' => 'Pesagen.title',
			);
			echo $this->Table->createTable(
						'Pesagen',
						$bovino['Pesagen'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	<!-- 
		<?php if (!empty($bovino['Leitepesagen'])): ?>
			<?php 
            $grafico = '<script type="text/javascript">
            window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
            {
                theme: "theme2",    
                title:{
                    text: "Pesagem"
                },
                data: [
                {        
                    type: "spline",

                    dataPoints: [
            ';
            foreach ($bovino['Leitepesagen'] as $key => $value) {
                // echo date('Y, m, d', strtotime($value['data']))." : ".$value['peso']."<br>";
                $grafico .="{ x: new Date(".date('Y, m, d', strtotime('-1 month', strtotime($value['data'])))."), y: ".$value['peso']." },";
                
            }
            $grafico .= '
                    ]
                    }       

                    ]
                });

            chart.render();
            }
            </script>';
            echo $grafico;
            ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna3">
				  Pesagem de leite
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna3" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
					<?= $this->Html->link("Ver detalhes", array('controller'=>'leitepesagens', 'bovino_id:1')); ?>
					<div class="content">                            
                      <div id="chartContainer" style="height: 300px; width: 100%;">
                      </div>
                    </div>
				  <?php 
			$displayFields = array(
						/*'Id' => 'Leitepesagen.id',*/
						'Bovino Id' => 'Bovino.bovino_id',
						'Ordenha Id' => 'Leitepesagen.ordenha_id',
						'Peso' => 'Leitepesagen.peso',
						'Data' => 'Leitepesagen.data',
						'Escore' => 'Leitepesagen.escore',
						'Descricao' => 'Leitepesagen.descricao',
			);
			echo $this->Table->createTable(
						'Leitepesagen',
						$bovino['Leitepesagen'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>
 -->
	
		<?php if (!empty($bovino['Movbovino'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna4">
				  Movimentação de bovinos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna4" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Movbovino.id',
						'Bovino Id' => 'Movbovino.bovino_id',
						'Pasto Id' => 'Movbovino.pasto_id',
						'Pastoanterior' => 'Movbovino.pastoanterior',
						'Data' => 'Movbovino.data',
						'Created' => 'Movbovino.created',
			);
			echo $this->Table->createTable(
						'Movbovino',
						$bovino['Movbovino'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($bovino['Ic'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna5">
				  Inseminação
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna5" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Ic.id',
						'Bovino Id' => 'Ic.bovino_id',
						'Semem Id' => 'Ic.semem_id',
						'Tipo' => 'Ic.tipo',
						'Status' => 'Ic.status',
						'Data' => 'Ic.data',
						'Dataparto' => 'Ic.dataparto',
						'Descricao' => 'Ic.descricao',
						'Created' => 'Ic.created',
						'Updated' => 'Ic.updated',
			);
			echo $this->Table->createTable(
						'Ic',
						$bovino['Ic'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	<?php //pr($bovino['Raca']); exit; ?>
		<?php if (!empty($bovino['Raca'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna6">
				  Raças
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna6" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Raca.id',
						'Nome' => 'Raca.nome',
						'Percentual' => 'BovinosRaca.percentual',
			);
			echo $this->Table->createTable(
						'Raca',
						$bovino['Raca'],
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