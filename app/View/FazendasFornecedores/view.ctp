<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'FazendasFornecedore'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFazendas Fornecedore' data-toggle='tab'><?php echo __('Fazendas Fornecedore'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFazendas Fornecedore'> 
			<dl>
				<dt><?php echo __('int'); ?></dt>
                <dd>
                    <?php echo h($fazendasFornecedore['FazendasFornecedore']['int']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Fazenda'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($fazendasFornecedore['Fazenda']['id'], array('controller' => 'fazendas', 'action' => 'view', $fazendasFornecedore['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Fornecedore'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($fazendasFornecedore['Fornecedore']['id'], array('controller' => 'fornecedores', 'action' => 'view', $fazendasFornecedore['Fornecedore']['id'])); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Fazendas', 
			'bended_arrow_left',
			array('controller' => 'fazendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Fornecedores', 
			'bended_arrow_left',
			array('controller' => 'fornecedores', 'action' => 'index'),
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