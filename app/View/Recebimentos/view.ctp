<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Recebimento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabRecebimento' data-toggle='tab'><?php echo __('Recebimento'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabRecebimento'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Quote')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($recebimento['Quote']['nome'], array('controller' => 'quotes', 'action' => 'view', $recebimento['Quote']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('ncheque')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['ncheque']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('venciemtno')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['venciemtno']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('documento')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['documento']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('emissao')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['emissao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('vencimento')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['vencimento']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('recebimento')); ?></dt>
                <dd>
                    <?php echo h($recebimento['Recebimento']['recebimento']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('quotes')), 
			'bended_arrow_left',
			array('controller' => 'quotes', 'action' => 'index'),
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