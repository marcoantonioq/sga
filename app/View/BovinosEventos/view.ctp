<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'BovinosEvento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabBovinos Evento' data-toggle='tab'>Bovinos Evento</a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabBovinos Evento'> 
			<dl>
				<dt>Id</dt>
                <dd>
                    <?php echo h($bovinosEvento['BovinosEvento']['id']); ?>
                    &nbsp;
                </dd>
                <dt>Bovino</dt>
                <dd>
                    <?php echo $this->Html->link($bovinosEvento['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $bovinosEvento['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
                <dt>Evento</dt>
                <dd>
                    <?php echo $this->Html->link($bovinosEvento['Evento']['nome'], array('controller' => 'eventos', 'action' => 'view', $bovinosEvento['Evento']['id'])); ?>
                    &nbsp;
                </dd>
				<dt>Criado em</dt>
                <dd>
                    <?php echo h($bovinosEvento['BovinosEvento']['created']); ?>
                    &nbsp;
                </dd>
				<dt>Atualizado em</dt>
                <dd>
                    <?php echo h($bovinosEvento['BovinosEvento']['updated']); ?>
                    &nbsp;
                </dd>
				<dt>Status</dt>
                <dd>
                    <?php echo h($bovinosEvento['BovinosEvento']['status']); ?>
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
			</div>
</div>
<?php $this->end(); ?>