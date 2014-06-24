<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Quote'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabQuote' data-toggle='tab'><?php echo __('Quote'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabQuote'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($quote['Quote']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($quote['Quote']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('contrato')); ?></dt>
                <dd>
                    <?php echo h($quote['Quote']['contrato']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('ultimo')); ?></dt>
                <dd>
                    <?php echo h($quote['Quote']['ultimo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('variacao')); ?></dt>
                <dd>
                    <?php echo h($quote['Quote']['variacao']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>