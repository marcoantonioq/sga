<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'MedicamentosBovino'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabMedicamentos Bovino' data-toggle='tab'><?php echo __('Medicamentos Bovino'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabMedicamentos Bovino'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($medicamentosBovino['MedicamentosBovino']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Medicamento')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($medicamentosBovino['Medicamento']['id'], array('controller' => 'medicamentos', 'action' => 'view', $medicamentosBovino['Medicamento']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Bovino')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($medicamentosBovino['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $medicamentosBovino['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('observacoes')); ?></dt>
                <dd>
                    <?php echo h($medicamentosBovino['MedicamentosBovino']['observacoes']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('medicamentos')), 
			'bended_arrow_left',
			array('controller' => 'medicamentos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('bovinos')), 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
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