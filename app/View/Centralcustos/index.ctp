<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Centralcusto'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('mes', ucfirst(__('mes'))); ?></th>
			<th><?php echo $this->Paginator->sort('caixa', ucfirst(__('caixa'))); ?></th>
			<th><?php echo $this->Paginator->sort('status', ucfirst(__('Situação'))); ?></th>
			<th><?php echo $this->Paginator->sort('created', ucfirst(__('created'))); ?></th>
			<th><?php echo $this->Paginator->sort('updated', ucfirst(__('updated'))); ?></th>
			<th>Fechar Caixa</th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Centralcusto}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($centralcustos as $centralcusto): ?>
	<tr class="<?= ($centralcusto['Centralcusto']['status']?'':'red') ?>">
		<td><?php echo h($centralcusto['Centralcusto']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Date->date($centralcusto['Centralcusto']['mes']); ?>&nbsp;</td>
		<td><?php echo h($centralcusto['Centralcusto']['caixa']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($centralcusto['Centralcusto']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Date->datetime($centralcusto['Centralcusto']['updated']); ?>&nbsp;</td>
		<td><?= ($centralcusto['Centralcusto']['status']?'Fechado':'Aberto') ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->image("/img/icones/fechar-custo.png", array(
				'width'=>'30px', 
				'title'=>'Fechar caixa',
				'url'=>array('controller'=>'centralcustos', 'action'=>'edit', $centralcusto['Centralcusto']['id'])
			)); ?>
		</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $centralcusto['Centralcusto']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $centralcusto['Centralcusto']['id']),
				array("title"=>" Fechar caixa ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $centralcusto['Centralcusto']['id']), 
				array("title"=>" Apagar", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $centralcusto['Centralcusto']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$centralcusto['Centralcusto']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Compras', 
			'bended_arrow_left',
			array('controller' => 'compras', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Custos', 
			'bended_arrow_left',
			array('controller' => 'custos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php 
		echo $this->Link->icon('Vendas', 
			'bended_arrow_left',
			array('controller' => 'vendas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Centralcusto.id'=>ucfirst(__('id')),
			'Centralcusto.mes'=>ucfirst(__('mes')),
			'Centralcusto.quantidade'=>ucfirst(__('quantidade')),
			'Centralcusto.custofixo'=>ucfirst(__('custofixo')),
			'Centralcusto.outrosvalores'=>ucfirst(__('outrosvalores')),
			'Centralcusto.custovariavel'=>ucfirst(__('custovariavel')),
			'Centralcusto.descricao'=>ucfirst(__('descricao')),
			'Centralcusto.created'=>ucfirst(__('created')),
			'Centralcusto.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>