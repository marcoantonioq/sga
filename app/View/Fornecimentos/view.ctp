<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Fornecimento'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFornecimento' data-toggle='tab'><?php echo __('Fornecimento'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFornecimento'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('centralcusto_id')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['centralcusto_id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['nome']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Retiro')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($fornecimento['Retiro']['nome'], array('controller' => 'retiros', 'action' => 'view', $fornecimento['Retiro']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('quantidade')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['quantidade']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('preco')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['preco']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('observacoes')); ?></dt>
                <dd>
                    <?php echo h($fornecimento['Fornecimento']['observacoes']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('retiros')), 
			'bended_arrow_left',
			array('controller' => 'retiros', 'action' => 'index'),
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