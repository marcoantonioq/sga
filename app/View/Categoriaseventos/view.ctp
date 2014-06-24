<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Categoriasevento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCategoriasevento' data-toggle='tab'><?php echo __('Categoriasevento'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCategoriasevento'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($categoriasevento['Categoriasevento']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($categoriasevento['Categoriasevento']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($categoriasevento['Categoriasevento']['descricao']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Group')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($categoriasevento['Group']['id'], array('controller' => 'groups', 'action' => 'view', $categoriasevento['Group']['id'])); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('groups')), 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('eventos')), 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($categoriasevento['Evento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Eventos'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Evento.id',
						ucfirst(__('user_id')) => 'Evento.user_id',
						ucfirst(__('status')) => 'Evento.status',
						ucfirst(__('categoriasevento_id')) => 'Evento.categoriasevento_id',
						ucfirst(__('nome')) => 'Evento.nome',
						ucfirst(__('datainicial')) => 'Evento.datainicial',
						ucfirst(__('alerta')) => 'Evento.alerta',
						ucfirst(__('datafinal')) => 'Evento.datafinal',
						ucfirst(__('datamax')) => 'Evento.datamax',
						ucfirst(__('secagens')) => 'Evento.secagens',
						ucfirst(__('iniciosecagem')) => 'Evento.iniciosecagem',
						ucfirst(__('altura')) => 'Evento.altura',
						ucfirst(__('pesagem')) => 'Evento.pesagem',
						ucfirst(__('desaleitamento')) => 'Evento.desaleitamento',
						ucfirst(__('cascosnormais')) => 'Evento.cascosnormais',
						ucfirst(__('aptas')) => 'Evento.aptas',
						ucfirst(__('leitepesagens')) => 'Evento.leitepesagens',
						ucfirst(__('escore')) => 'Evento.escore',
						ucfirst(__('ic_id')) => 'Evento.ic_id',
						ucfirst(__('descricao')) => 'Evento.descricao',
						ucfirst(__('diagnostico')) => 'Evento.diagnostico',
						ucfirst(__('lancarcalendario')) => 'Evento.lancarcalendario',
						ucfirst(__('created')) => 'Evento.created',
						ucfirst(__('updated')) => 'Evento.updated',
			);
			echo $this->Table->createTable(
						'Evento',
						$categoriasevento['Evento'],
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