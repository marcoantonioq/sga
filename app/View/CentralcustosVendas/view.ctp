<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'CentralcustosVenda'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCentralcustos Venda' data-toggle='tab'><?php echo __('Centralcustos Venda'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCentralcustos Venda'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($centralcustosVenda['CentralcustosVenda']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Centralcusto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($centralcustosVenda['Centralcusto']['id'], array('controller' => 'centralcustos', 'action' => 'view', $centralcustosVenda['Centralcusto']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Venda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($centralcustosVenda['Venda']['nome'], array('controller' => 'vendas', 'action' => 'view', $centralcustosVenda['Venda']['id'])); ?>
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
		echo $this->Link->icon(__('vendas'), 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
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