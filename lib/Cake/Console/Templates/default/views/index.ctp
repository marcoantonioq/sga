<?php echo '<?php $this->extend(\'/Common/index\') ?>'; ?>

<?php echo '<?php $this->assign(\'title\', \''.$modelClass.'\'); ?>'; ?>


<?php echo '<?php $this->start(\'contents\'); ?>'; ?>

<table class='responsive table table-bordered' id='checkAll'>
<thead>
	<tr>
	<?php foreach ($fields as $field): ?>
		<th><?php echo "<?php echo \$this->Paginator->sort('{$field}', ucfirst(__('{$field}'))); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Ações'); ?>"; ?></th>
		<th id='masterCh' class='ch'>
			<input type='checkbox' name='{<?=$modelClass ?>}' value='all' class='styled' />
		</th>
	</tr>
</thead>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}

		echo "\t\t<td class=\"actions\">\n";
			echo "\n\t\t\t<?php echo \$this->Html->link( 
				\"<span class='icon12 brocco-icon-search'></span>\", 
				array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']), 
				array(\"title\"=>\" Ver \", 'class'=>\"tip\",'escape'=>false) 
			 ); ?>\n";
			echo "\n\t\t\t<?php echo \$this->Html->link(
				\"<span class='icon12 icomoon-icon-pencil'></span>\", 
				array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),
				array(\"title\"=>\" Editar \", 'class'=>\"tip\",'escape'=>false) 
			); ?>\n";
			echo "\n\t\t\t<?php echo \$this->Form->postLink(
				\"<span class='icon12 icomoon-icon-remove'></span>\", 
				array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), 
				array(\"title\"=>\" Apagar \", 'class'=>\"tip\",'escape'=>false) ,
				__('Tem certeza de que deseja excluir?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])
			); ?>\n";
		echo "\t\t</td>\n";
		echo "\n\t\t<td class=\"chChildren\">\n"; 
	        echo "\t\t\t<?php echo \$this->Form->checkbox('row.'.\${$singularVar}['{$modelClass}']['{$primaryKey}'], array( 'class'=>'styled' ));?>";
    	echo "\n\t\t</td>";
	echo "\n\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
</table>

<?php echo '<?php $this->end(); ?>'; ?>

<?php 
	echo "\n<?php \$this->start('box'); ?>";
	$done = array();
	foreach ($associations as $type => $data) {
	foreach ($data as $alias => $details) {
	if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
		echo "\n
		<?php 
		echo \$this->Link->icon('" . Inflector::humanize($details['controller']) . "', 
			'bended_arrow_left',
			array('controller' => '{$details['controller']}', 'action' => 'index'),
			array('class'=> 'btn btn-block')
		);
		?>\n";					
		$done[] = $details['controller'];
	}
	}
	}
	echo "\n\n<?php \$this->end(); ?>";

 ?>


<?php 
echo "<?php echo \$this->start('filter'); ?>

	<?php echo \$this->Form->input('Filter.type.0', array(
		'label'=>false,
		'div'=>'span3',
        'options' => array(";
        	foreach ($fields as $field) {
				$isKey = false;
				if (!empty($associations['belongsTo'])) {
					foreach ($associations['belongsTo'] as $alias => $details) {
						if ($field === $details['foreignKey']) {
							$isKey = true;
							// echo "\n\t\t\t'$alias.id'=>ucfirst(__('$field')),";
							echo "\n\t\t\t'$modelClass.$field'=>ucfirst(__('$field')),";
							break;
						}
					}
				}
				if ($isKey !== true) {
					echo "\n\t\t\t'$modelClass.$field'=>ucfirst(__('$field')),";
				}
			}
		echo "\n\t\t),
        /*'empty' => 'Type',*/
    )); ?>

<?php echo \$this->end(); ?>";

 ?>