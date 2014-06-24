<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Pagamento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabPagamento' data-toggle='tab'><?php echo __('Pagamento'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabPagamento'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Centralcusto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pagamento['Centralcusto']['mes'], array('controller' => 'centralcustos', 'action' => 'view', $pagamento['Centralcusto']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('pagamentoscol')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['pagamentoscol']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('vencimento')); ?></dt>
                <dd>
                    <?php echo h($pagamento['Pagamento']['vencimento']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('centralcustos')), 
			'bended_arrow_left',
			array('controller' => 'centralcustos', 'action' => 'index'),
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