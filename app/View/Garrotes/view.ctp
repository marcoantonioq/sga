<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Garrote'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabGarrote' data-toggle='tab'><?php echo __('Garrote'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabGarrote'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Bovino')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($garrote['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $garrote['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nome')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('datanascimento')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['datanascimento']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('totalpesagem')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['totalpesagem']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('observacoes')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['observacoes']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($garrote['Garrote']['updated']); ?>
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


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
			</div>
</div>
<?php $this->end(); ?>