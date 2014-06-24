<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Meteorologico'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabMeteorologico' data-toggle='tab'><?php echo __('Meteorologico'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabMeteorologico'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('data')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('umidademin')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['umidademin']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('umidademax')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['umidademax']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('chuva')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['chuva']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('temperaturamin')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['temperaturamin']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('temperaturamax')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['temperaturamax']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('observacoes')); ?></dt>
                <dd>
                    <?php echo h($meteorologico['Meteorologico']['observacoes']); ?>
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