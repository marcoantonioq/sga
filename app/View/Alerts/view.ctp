<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Alert'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabAlert' data-toggle='tab'><?php echo __('Alert'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabAlert'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('titulo')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['titulo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('tipo')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['tipo']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('nivel')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['nivel']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('categoria')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['categoria']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('origem')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['origem']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('messagem')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['messagem']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('updated')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['updated']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($alert['Alert']['descricao']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>


<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon(__('groups'), 
			'bended_arrow_left',
			array('controller' => 'groups', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon(__('users'), 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($alert['Group'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  <? echo ucfirst(__('Groups'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'Group.id',
						ucfirst(__('name')) => 'Group.name',
						ucfirst(__('descricao')) => 'Group.descricao',
						ucfirst(__('created')) => 'Group.created',
						ucfirst(__('modified')) => 'Group.modified',
						ucfirst(__('user_count')) => 'Group.user_count',
			);
			echo $this->Table->createTable(
						'Group',
						$alert['Group'],
						$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);?>
				</div>
			</div>
		</div>
	   	<?php endif; ?>

	
		<?php if (!empty($alert['User'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna2">
				  <? echo ucfirst(__('Users'))
 ?>				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna2" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php 
			$displayFields = array(
						ucfirst(__('id')) => 'User.id',
						ucfirst(__('username')) => 'User.username',
						ucfirst(__('email')) => 'User.email',
						ucfirst(__('password')) => 'User.password',
						ucfirst(__('status')) => 'User.status',
						ucfirst(__('sexo_id')) => 'User.sexo_id',
						ucfirst(__('group_id')) => 'User.group_id',
						ucfirst(__('foto')) => 'User.foto',
						ucfirst(__('foto_dir')) => 'User.foto_dir',
			);
			echo $this->Table->createTable(
						'User',
						$alert['User'],
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