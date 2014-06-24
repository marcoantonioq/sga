<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Movbovino'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabMovbovino' data-toggle='tab'><?php echo __('Movbovino'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabMovbovino'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($movbovino['Movbovino']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Bovino')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($movbovino['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $movbovino['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Pasto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($movbovino['Pasto']['id'], array('controller' => 'pastos', 'action' => 'view', $movbovino['Pasto']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('pastoanterior')); ?></dt>
                <dd>
                    <?php echo h($movbovino['Movbovino']['pastoanterior']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($movbovino['Movbovino']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($movbovino['Movbovino']['created']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Bovinos', 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Pastos', 
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
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