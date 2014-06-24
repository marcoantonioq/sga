<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Ordenha'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabOrdenha' data-toggle='tab'><?php echo __('Ordenha'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabOrdenha'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($ordenha['Ordenha']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('nome'); ?></dt>
                <dd>
                    <?php echo h($ordenha['Ordenha']['nome']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('local'); ?></dt>
                <dd>
                    <?php echo h($ordenha['Ordenha']['local']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Leitepesagens', 
			'bended_arrow_left',
			array('controller' => 'leitepesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($ordenha['Leitepesagen'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Leitepesagens
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Leitepesagen.id',
						'Bovino Id' => 'Leitepesagen.bovino_id',
						'Ordenha Id' => 'Leitepesagen.ordenha_id',
						'Peso' => 'Leitepesagen.peso',
						'Data' => 'Leitepesagen.data',
						'Escore' => 'Leitepesagen.escore',
						'Descricao' => 'Leitepesagen.descricao',
			);
			echo $this->Table->createTable(
						'Leitepesagen',
						$ordenha['Leitepesagen'],
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