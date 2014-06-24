<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'CentralcustosCompra'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCentralcustos Compra' data-toggle='tab'><?php echo __('Centralcustos Compra'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCentralcustos Compra'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($centralcustosCompra['CentralcustosCompra']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Centralcusto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($centralcustosCompra['Centralcusto']['id'], array('controller' => 'centralcustos', 'action' => 'view', $centralcustosCompra['Centralcusto']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Compra')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($centralcustosCompra['Compra']['nome'], array('controller' => 'compras', 'action' => 'view', $centralcustosCompra['Compra']['id'])); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('centralcustos'), 
			'bended_arrow_left',
			array('controller' => 'centralcustos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('compras'), 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
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