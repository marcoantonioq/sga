<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Ic'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabIc' data-toggle='tab'><?php echo __('Ic'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabIc'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Bovino'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($ic['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $ic['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Semem'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($ic['Semem']['id'], array('controller' => 'semems', 'action' => 'view', $ic['Semem']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('tipo'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['tipo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('status'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['status']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('data'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('dataparto'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['dataparto']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('descricao'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($ic['Ic']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Semems', 
			'bended_arrow_left',
			array('controller' => 'semems', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Eventos', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($ic['Evento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Eventos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Evento.id',
						'User Id' => 'Evento.user_id',
						'Status' => 'Evento.status',
						'Categoriasevento Id' => 'Evento.categoriasevento_id',
						'Nome' => 'Evento.nome',
						'Datainicial' => 'Evento.datainicial',
						'Alerta' => 'Evento.alerta',
						'Datafinal' => 'Evento.datafinal',
						'Datamax' => 'Evento.datamax',
						'Secagens' => 'Evento.secagens',
						'Iniciosecagem' => 'Evento.iniciosecagem',
						'Altura' => 'Evento.altura',
						'Pesagem' => 'Evento.pesagem',
						'Desaleitamento' => 'Evento.desaleitamento',
						'Cascosnormais' => 'Evento.cascosnormais',
						'Aptas' => 'Evento.aptas',
						'Leitepesagens' => 'Evento.leitepesagens',
						'Escore' => 'Evento.escore',
						'Ic Id' => 'Evento.ic_id',
						'Descricao' => 'Evento.descricao',
						'Diagnostico' => 'Evento.diagnostico',
						'Lancarcalendario' => 'Evento.lancarcalendario',
						'Created' => 'Evento.created',
						'Updated' => 'Evento.updated',
			);
			echo $this->Table->createTable(
						'Evento',
						$ic['Evento'],
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