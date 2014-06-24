<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Categoriacalendario'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCategoriacalendario' data-toggle='tab'><?php echo __('Categoriacalendario'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCategoriacalendario'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($categoriacalendario['Categoriacalendario']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($categoriacalendario['Categoriacalendario']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($categoriacalendario['Categoriacalendario']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('group_id')); ?></dt>
                <dd>
                    <?php echo h($categoriacalendario['Categoriacalendario']['group_id']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('__(calendarios)', 
			'bended_arrow_left',
			array('controller' => 'calendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($categoriacalendario['Calendario'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Calendarios
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Calendario.id',
						ucfirst(__('fazenda_id')) => 'Calendario.fazenda_id',
						ucfirst(__('titulo')) => 'Calendario.titulo',
						ucfirst(__('inicio')) => 'Calendario.inicio',
						ucfirst(__('termino')) => 'Calendario.termino',
						ucfirst(__('observacoes')) => 'Calendario.observacoes',
						ucfirst(__('categoriacalendario_id')) => 'Calendario.categoriacalendario_id',
			);
			echo $this->Table->createTable(
						'Calendario',
						$categoriacalendario['Calendario'],
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