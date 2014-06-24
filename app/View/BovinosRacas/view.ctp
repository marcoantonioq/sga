<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'BovinosRaca'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabBovinos Raca' data-toggle='tab'><?php echo __('Bovinos Raca'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabBovinos Raca'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($bovinosRaca['BovinosRaca']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Bovino')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($bovinosRaca['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $bovinosRaca['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Raca')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($bovinosRaca['Raca']['id'], array('controller' => 'racas', 'action' => 'view', $bovinosRaca['Raca']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('percentual')); ?></dt>
                <dd>
                    <?php echo h($bovinosRaca['BovinosRaca']['percentual']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($bovinosRaca['BovinosRaca']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($bovinosRaca['BovinosRaca']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(ucfirst(__('bovinos')), 
			'bended_arrow_left',
			array('controller' => 'bovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(ucfirst(__('racas')), 
			'bended_arrow_left',
			array('controller' => 'racas', 'action' => 'index'),
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