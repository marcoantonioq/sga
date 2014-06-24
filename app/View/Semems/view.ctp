<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Semem'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabSemem' data-toggle='tab'><?php echo __('Semem'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabSemem'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('nome'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('pai'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['pai']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('mae'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['mae']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('data'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['data']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('origem'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['origem']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('created'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('updated'); ?></dt>
                <dd>
                    <?php echo h($semem['Semem']['updated']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Ics', 
			'bended_arrow_left',
			array('controller' => 'ics', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($semem['Ic'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Ics
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Ic.id',
						'Bovino Id' => 'Ic.bovino_id',
						'Semem Id' => 'Ic.semem_id',
						'Tipo' => 'Ic.tipo',
						'Status' => 'Ic.status',
						'Data' => 'Ic.data',
						'Dataparto' => 'Ic.dataparto',
						'Descricao' => 'Ic.descricao',
						'Created' => 'Ic.created',
						'Updated' => 'Ic.updated',
			);
			echo $this->Table->createTable(
						'Ic',
						$semem['Ic'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>