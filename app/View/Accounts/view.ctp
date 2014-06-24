<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Account'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabAccount' data-toggle='tab'><?php echo __('Account'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabAccount'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($account['Account']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Fazenda')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($account['Fazenda']['nome'], array('controller' => 'fazendas', 'action' => 'view', $account['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('banco')); ?></dt>
                <dd>
                    <?php echo h($account['Account']['banco']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('agencia')); ?></dt>
                <dd>
                    <?php echo h($account['Account']['agencia']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('numero')); ?></dt>
                <dd>
                    <?php echo h($account['Account']['numero']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($account['Account']['descricao']); ?>
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


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>