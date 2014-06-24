<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Recebimento'); ?>

<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id', ucfirst(__('id'))); ?></th>
			<th><?php echo $this->Paginator->sort('quote_id', ucfirst(__('quote_id'))); ?></th>
			<th><?php echo $this->Paginator->sort('ncheque', ucfirst(__('ncheque'))); ?></th>
			<th><?php echo $this->Paginator->sort('valor', ucfirst(__('valor'))); ?></th>
			<th><?php echo $this->Paginator->sort('venciemtno', ucfirst(__('venciemtno'))); ?></th>
			<th><?php echo $this->Paginator->sort('documento', ucfirst(__('documento'))); ?></th>
			<th><?php echo $this->Paginator->sort('emissao', ucfirst(__('emissao'))); ?></th>
			<th><?php echo $this->Paginator->sort('vencimento', ucfirst(__('vencimento'))); ?></th>
			<th><?php echo $this->Paginator->sort('recebimento', ucfirst(__('recebimento'))); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Recebimento}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($recebimentos as $recebimento): ?>
	<tr>
		<td><?php echo h($recebimento['Recebimento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recebimento['Quote']['nome'], array('controller' => 'quotes', 'action' => 'view', $recebimento['Quote']['id'])); ?>
		</td>
		<td><?php echo h($recebimento['Recebimento']['ncheque']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['valor']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['venciemtno']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['documento']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['emissao']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['vencimento']); ?>&nbsp;</td>
		<td><?php echo h($recebimento['Recebimento']['recebimento']); ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link( 
				"<span class='icon12 brocco-icon-search'></span>", 
				array('action' => 'view', $recebimento['Recebimento']['id']), 
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false) 
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>", 
				array('action' => 'edit', $recebimento['Recebimento']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false) 
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>", 
				array('action' => 'delete', $recebimento['Recebimento']['id']), 
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $recebimento['Recebimento']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$recebimento['Recebimento']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php 
		echo $this->Link->icon('Quotes', 
			'bended_arrow_left',
			array('controller' => 'quotes', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Recebimento.id'=>ucfirst(__('id')),
			'Recebimento.quote_id'=>ucfirst(__('quote_id')),
			'Recebimento.ncheque'=>ucfirst(__('ncheque')),
			'Recebimento.valor'=>ucfirst(__('valor')),
			'Recebimento.venciemtno'=>ucfirst(__('venciemtno')),
			'Recebimento.documento'=>ucfirst(__('documento')),
			'Recebimento.emissao'=>ucfirst(__('emissao')),
			'Recebimento.vencimento'=>ucfirst(__('vencimento')),
			'Recebimento.recebimento'=>ucfirst(__('recebimento')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>