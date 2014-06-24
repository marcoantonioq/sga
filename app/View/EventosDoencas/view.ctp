<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'EventosDoenca'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabEventos Doenca' data-toggle='tab'><?php echo __('Eventos Doenca'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabEventos Doenca'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($eventosDoenca['EventosDoenca']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Evento'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($eventosDoenca['Evento']['nome'], array('controller' => 'eventos', 'action' => 'view', $eventosDoenca['Evento']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Doenca'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($eventosDoenca['Doenca']['id'], array('controller' => 'doencas', 'action' => 'view', $eventosDoenca['Doenca']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('diagnostico'); ?></dt>
                <dd>
                    <?php echo h($eventosDoenca['EventosDoenca']['diagnostico']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($eventosDoenca['EventosDoenca']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($eventosDoenca['EventosDoenca']['updated']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('observacoes'); ?></dt>
                <dd>
                    <?php echo h($eventosDoenca['EventosDoenca']['observacoes']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Eventos', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Doencas', 
			'bended_arrow_left',
			array('controller' => 'doencas', 'action' => 'index'),
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