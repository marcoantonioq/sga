<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'User'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabUser' data-toggle='tab'><?php echo __('User'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabUser'> 
			<dl>
				<dt><?php echo __('id'); ?></dt>
                <dd>
                    <?php echo h($user['User']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('username'); ?></dt>
                <dd>
                    <?php echo h($user['User']['username']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('email'); ?></dt>
                <dd>
                    <?php echo h($user['User']['email']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('password'); ?></dt>
                <dd>
                    <?php echo h($user['User']['password']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo __('status'); ?></dt>
                <dd>
                    <?php echo h($user['User']['status']); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Sexo'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($user['Sexo']['nome'], array('controller' => 'sexos', 'action' => 'view', $user['Sexo']['id'])); ?>
                    &nbsp;
                </dd>
                <dt><?php echo __('Group'); ?></dt>
                <dd>
                    <?php echo $this->Html->link($user['Group']['id'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                    &nbsp;
                </dd>
				<!-- <dt><?php echo __('foto'); ?></dt>
                <?php echo $this->Html->image($user['User']['foto_dir']); ?> -->
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Sexos', 
			'bended_arrow_left',
			array('controller' => 'sexos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Groups', 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Atalhos', 
			'bended_arrow_left',
			array('controller' => 'atalhos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Eventos', 
			'bended_arrow_left',
			array('controller' => 'eventos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($user['Atalho'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Atalhos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Atalho.id',
						'User Id' => 'Atalho.user_id',
						'Title' => 'Atalho.title',
						'Controller' => 'Atalho.controller',
						'Action' => 'Atalho.action',
						'Prefixes' => 'Atalho.prefixes',
						'Plugin' => 'Atalho.plugin',
						'Class' => 'Atalho.class',
			);
			echo $this->Table->createTable(
						'Atalho',
						$user['Atalho'],
						$displayFields,
						null,
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($user['Evento'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  Eventos
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						'Id' => 'Evento.id',
						'Status' => 'Aberto',
						'Nome' => 'Evento.nome',
						'Datainicial' => 'Evento.datainicial',
						'Data máxima' => 'Evento.datafinal',
						'Created' => 'Evento.created',
						'Updated' => 'Evento.updated',
			);
			echo $this->Table->createTable(
						'Evento',
						$user['Evento'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

		</div>
</div>
<?php $this->end(); ?>