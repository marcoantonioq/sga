<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Custo'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabCusto' data-toggle='tab'><?php echo __('Custo'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabCusto'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($custo['Custo']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('centralcusto_id')); ?></dt>
                <dd>
                    <?php echo h($custo['Custo']['centralcusto_id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('item')); ?></dt>
                <dd>
                    <?php echo h($custo['Custo']['item']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('valor')); ?></dt>
                <dd>
                    <?php echo h($custo['Custo']['valor']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($custo['Custo']['descricao']); ?>
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