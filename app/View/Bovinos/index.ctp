<?php $this->extend('/Common/index') ?>
<?php $this->assign('title', 'Animais/Bovinos'); ?>

<?php $this->start('outros'); ?>

<!-- <div class="row-fluid">
    <div class="span12">
        <div class="box">
            <div class="title">
                <h3>
                    <span class="icon16 icomoon-icon-equalizer-2"></span>
                    <span>Bovinos irregular</span>
                </h3>
                <a href="#" class="minimize">Minimize</a>
            </div>
        </div>
    </div>
</div>
 -->
<?php $this->end(); ?>


<?php $this->start('contents'); ?>
<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('nbrinco','Brinco'); ?></th>
			<th><?php echo $this->Paginator->sort('categoriab_id', 'Categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('desaleitamento'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{Bovino}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php foreach ($bovinos as $bovino): ?>
	<tr>
		<td><?php echo h($bovino['Bovino']['id']); ?>&nbsp;</td>
		<td><?php echo h($bovino['Bovino']['nome']); ?>&nbsp;</td>
		<td><?php echo h($bovino['Bovino']['nbrinco']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bovino['Categoriab']['nome'], array('controller' => 'categoriabs', 'action' => 'view', $bovino['Categoriab']['id'])); ?>
		</td>
		<td>
			<?php
				echo ($bovino['Bovino']['status'] == 1 ) ?
				"<span class='green'>Ok</span>":
				"<span class='red'>Não</span>";
			?>&nbsp;
		</td>
		<td><?php echo ($bovino['Bovino']['desaleitamento'] == 1 ) ? "Sim":"Não"; ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link(
				"<span class='icon12 brocco-icon-search'></span>",
				array('action' => 'view', $bovino['Bovino']['id']),
				array("title"=>" Ver ", 'class'=>"tip",'escape'=>false)
			 ); ?>

			<?php echo $this->Html->link(
				"<span class='icon12 icomoon-icon-pencil'></span>",
				array('action' => 'edit', $bovino['Bovino']['id']),
				array("title"=>" Editar ", 'class'=>"tip",'escape'=>false)
			); ?>

			<?php echo $this->Form->postLink(
				"<span class='icon12 icomoon-icon-remove'></span>",
				array('action' => 'delete', $bovino['Bovino']['id']),
				array("title"=>" Apagar ", 'class'=>"tip",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', $bovino['Bovino']['id'])
			); ?>
		</td>

		<td class="chChildren">
			<?php echo $this->Form->checkbox('row.'.$bovino['Bovino']['id'], array( 'class'=>'styled' ));?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<?php 
	if(!empty($this->data['grafico'])){
		echo $this->data['grafico'];
	}
?>

<?php $this->end(); ?>

<?php $this->start('box'); ?>

		<?php
		echo $this->Link->icon('Pastos',
			'bended_arrow_left',
			array('controller' => 'pastos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php
		echo $this->Link->icon('Categoriabs',
			'bended_arrow_left',
			array('controller' => 'categoriabs', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

		<?php
		echo $this->Link->icon('Pelagens',
			'bended_arrow_left',
			array('controller' => 'pelagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>

		<?php 
		echo $this->Link->icon('Garrotes / Cria',
			'bended_arrow_left',
			array('controller' => 'garrotes', 'action' => 'index'),
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


		<?php
		echo $this->Link->icon('Pesagens',
			'bended_arrow_left',
			array('controller' => 'pesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php
		echo $this->Link->icon('Leitepesagens',
			'bended_arrow_left',
			array('controller' => 'leitepesagens', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php
		echo $this->Link->icon('Movbovinos',
			'bended_arrow_left',
			array('controller' => 'movbovinos', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php
		echo $this->Link->icon('Ics',
			'bended_arrow_left',
			array('controller' => 'ics', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


		<?php
		echo $this->Link->icon('Racas',
			'bended_arrow_left',
			array('controller' => 'racas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);

		echo $this->Link->icon('Bovinos / Raças', 
			'bended_arrow_left',
			array('controller' => 'bovinos_racas', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>


<?php $this->end(); ?>

<?php echo $this->start('filter'); ?>

	<?php echo $this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(
			'Bovino.id'=>ucfirst(__('id')),
			'Bovino.nbrinco'=>ucfirst(__('nbrinco')),
			'Bovino.idvenda'=>ucfirst(__('idvenda')),
			'Bovino.idcompra'=>ucfirst(__('idcompra')),
			'Bovino.pai'=>ucfirst(__('pai')),
			'Bovino.mae'=>ucfirst(__('mae')),
			'Bovino.pasto_id'=>ucfirst(__('pasto_id')),
			'Bovino.categoriab_id'=>ucfirst(__('categoriab_id')),
			'Bovino.sexobovino_id'=>ucfirst(__('sexobovino_id')),
			'Bovino.pelagen_id'=>ucfirst(__('pelagen_id')),
			'Bovino.nome'=>ucfirst(__('nome')),
			'Bovino.nascimento'=>ucfirst(__('nascimento')),
			'Bovino.desaleitamento'=>ucfirst(__('desaleitamento')),
			'Bovino.preco'=>ucfirst(__('preco')),
			'Bovino.descricao'=>ucfirst(__('descricao')),
			'Bovino.status'=>ucfirst(__('status')),
			'Bovino.cria'=>ucfirst(__('cria')),
			'Bovino.created'=>ucfirst(__('created')),
			'Bovino.cascosnormais'=>ucfirst(__('cascosnormais')),
			'Bovino.updated'=>ucfirst(__('updated')),
		),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo $this->end(); ?>

<?php echo $this->start('options'); ?>
<li>
	<?php echo $this->Form->button('Gerar gráfico', 
        array(
            'label'=>false,
            'class'=>"btn btn-link",
            'name'=>'data[action]',
            'value'=>'__chart',
        )
    ); ?>
</li>

<?php echo $this->end(); ?>
