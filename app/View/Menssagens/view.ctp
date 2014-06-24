<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Menssagen'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabMenssagen' data-toggle='tab'><?php echo __('Menssagen'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabMenssagen'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($menssagen['Menssagen']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('titulo'); ?></dt>
                <dd>
                    <?php echo h($menssagen['Menssagen']['titulo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('conteudo'); ?></dt>
                <dd>
                    <?php echo h($menssagen['Menssagen']['conteudo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($menssagen['Menssagen']['created']); ?>
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