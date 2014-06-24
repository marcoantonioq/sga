<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Calendario'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCalendario' data-toggle='tab'><?php echo __('Calendario'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCalendario'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($calendario['Calendario']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fazenda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($calendario['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $calendario['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('titulo')); ?></dt>
                <dd>
                    <?php echo h($calendario['Calendario']['titulo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('inicio')); ?></dt>
                <dd>
                    <?php echo h($calendario['Calendario']['inicio']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('termino')); ?></dt>
                <dd>
                    <?php echo h($calendario['Calendario']['termino']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('observacoes')); ?></dt>
                <dd>
                    <?php echo h($calendario['Calendario']['observacoes']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Categoriacalendario')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($calendario['Categoriacalendario']['id'], array('controller' => 'categoriacalendarios', 'action' => 'view', $calendario['Categoriacalendario']['id'])); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('fazendas')), 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('categoriacalendarios')), 
			'bended_arrow_left',
			array('controller' => 'categoriacalendarios', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>