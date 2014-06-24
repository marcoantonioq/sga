<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Leitepesagen'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabLeitepesagen' data-toggle='tab'><?php echo __('Leitepesagen'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabLeitepesagen'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($leitepesagen['Leitepesagen']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Bovino'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($leitepesagen['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $leitepesagen['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Ordenha'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($leitepesagen['Ordenha']['local'], array('controller' => 'ordenhas', 'action' => 'view', $leitepesagen['Ordenha']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('peso'); ?></dt>
                <dd>
                    <?php echo h($leitepesagen['Leitepesagen']['peso']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('data'); ?></dt>
                <dd>
                    <?php echo h($leitepesagen['Leitepesagen']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('escore'); ?></dt>
                <dd>
                    <?php echo h($leitepesagen['Leitepesagen']['escore']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('descricao'); ?></dt>
                <dd>
                    <?php echo h($leitepesagen['Leitepesagen']['descricao']); ?>
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
		echo $this->Link->icon('Ordenhas', 
			'bended_arrow_left',
			array('controller' => 'ordenhas', 'action' => 'index'),
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