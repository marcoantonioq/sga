<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'ClientesFazenda'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabClientes Fazenda' data-toggle='tab'><?php echo __('Clientes Fazenda'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabClientes Fazenda'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($clientesFazenda['ClientesFazenda']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Cliente'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($clientesFazenda['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $clientesFazenda['Cliente']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Fazenda'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($clientesFazenda['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $clientesFazenda['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($clientesFazenda['ClientesFazenda']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($clientesFazenda['ClientesFazenda']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Clientes', 
			'bended_arrow_left',
			array('controller' => 'clientes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
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