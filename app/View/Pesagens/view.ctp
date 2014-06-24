<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Pesagen'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabPesagen' data-toggle='tab'><?php echo __('Pesagen'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabPesagen'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($pesagen['Pesagen']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Bovino')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pesagen['Bovino']['nome'], array('controller' => 'bovinos', 'action' => 'view', $pesagen['Bovino']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('peso')); ?></dt>
                <dd>
                    <?php echo h($pesagen['Pesagen']['peso']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($pesagen['Pesagen']['data']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo ucfirst(__('Pasto')); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pesagen['Pasto']['id'], array('controller' => 'pastos', 'action' => 'view', $pesagen['Pasto']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($pesagen['Pesagen']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('title')); ?></dt>
                <dd>
                    <?php echo h($pesagen['Pesagen']['title']); ?>
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