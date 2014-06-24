<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'PessoasCargo'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabPessoas Cargo' data-toggle='tab'><?php echo __('Pessoas Cargo'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabPessoas Cargo'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($pessoasCargo['PessoasCargo']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Pessoa'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pessoasCargo['Pessoa']['name'], array('controller' => 'pessoas', 'action' => 'view', $pessoasCargo['Pessoa']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Cargo'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($pessoasCargo['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $pessoasCargo['Cargo']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($pessoasCargo['PessoasCargo']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($pessoasCargo['PessoasCargo']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Cargos', 
			'bended_arrow_left',
			array('controller' => 'cargos', 'action' => 'index'),
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