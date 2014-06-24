<?php $this->extend('/Common/view') ?>
<?php $this->assign('title', 'Group'); ?>

<?php $this->start('contents'); ?>


<div class='tabbable'>
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tabGroup' data-toggle='tab'><?php echo __('Group'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tabGroup'> 
			<dl>
				<dt><?php echo ucfirst(__('id')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['id']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('name')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['name']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('descricao')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['descricao']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('created')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['created']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('modified')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['modified']); ?>
                    &nbsp;
                </dd>
				<dt><?php echo ucfirst(__('user_count')); ?></dt>
                <dd>
                    <?php echo h($group['Group']['user_count']); ?>
                    &nbsp;
                </dd>
			</dl>
		</div>
	</div>
</div>



<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('__(users)', 
			'bended_arrow_left',
			array('controller' => 'users', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>


<?php $this->end(); ?>


<?php $this->start('related'); ?><div class="row-fluid">
	<div class="accordion" id="accordion1">
		
		<?php if (!empty($group['User'])): ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna1">
				  Users
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna1" class="accordion-body collapse" style="height: 0px; ">
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
						$group['User'],
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