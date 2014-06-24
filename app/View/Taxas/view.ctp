<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Taxa'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabTaxa' data-toggle='tab'><?php echo __('Taxa'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabTaxa'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($taxa['Taxa']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Quote')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($taxa['Quote']['id'], array('controller' => 'quotes', 'action' => 'view', $taxa['Quote']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($taxa['Taxa']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valores')); ?></dt>
                <dd>
                    <?php echo h($taxa['Taxa']['valores']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('date')); ?></dt>
                <dd>
                    <?php echo h($taxa['Taxa']['date']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Quotes', 
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