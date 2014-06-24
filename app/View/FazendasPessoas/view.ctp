<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'FazendasPessoa'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabFazendas Pessoa' data-toggle='tab'><?php echo __('Fazendas Pessoa'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabFazendas Pessoa'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($fazendasPessoa['FazendasPessoa']['id']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Fazenda'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($fazendasPessoa['Fazenda']['id'], array('controller' => 'fazendas', 'action' => 'view', $fazendasPessoa['Fazenda']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Pessoa'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($fazendasPessoa['Pessoa']['name'], array('controller' => 'pessoas', 'action' => 'view', $fazendasPessoa['Pessoa']['id'])); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($fazendasPessoa['FazendasPessoa']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($fazendasPessoa['FazendasPessoa']['updated']); ?>
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
		echo $this->Link->icon('Pessoas', 
			'bended_arrow_left',
			array('controller' => 'pessoas', 'action' => 'index'),
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