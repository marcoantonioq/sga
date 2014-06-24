<?php echo '<?php $this->extend(\'/Common/view\') ?>'; ?>

<?php echo '<?php $this->assign(\'title\', \''.$modelClass.'\'); ?>'; ?>


<?php echo '<?php $this->start(\'contents\'); ?>'; ?>


<?php
echo "
<div class='tabbable'>"
;    echo "
    <ul class='nav nav-tabs'>
        <li class='active'>
            <a href='#tab".$singularHumanName."' data-toggle='tab'><?php echo __('".$singularHumanName."'); ?></a>
        </li>
    </ul>
    <div class='tab-content'>
    	<div class='tab-pane active' id='tab$singularHumanName'>";
			echo " 
			<dl>";
			foreach ($fields as $field) {
				$isKey = false;
				if (!empty($associations['belongsTo'])) {
					foreach ($associations['belongsTo'] as $alias => $details) {
						if ($field === $details['foreignKey']) {
						$isKey = true;
				echo "
                <dt><?php echo ucfirst(__('".$alias."')); ?></dt>
                <dd>
                    <?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>
                    &nbsp;
                </dd>";
						break;
						}
					}
				}
				if ($isKey !== true) {
				echo "
				<dt><?php echo ucfirst(__('".$field."')); ?></dt>
                <dd>
                    <?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>
                    &nbsp;
                </dd>";
				}
			}
			echo "
			</dl>";
			echo "\n\t\t</div>";
	echo "
	</div>";
echo "
</div>";

?>


<?php

	echo "\n<?php \$this->start('box'); ?>";
	$done = array();
	foreach ($associations as $type => $data) {
	foreach ($data as $alias => $details) {
	if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
		echo "\n
		<?php 
		echo \$this->Link->icon(ucfirst(__('".$details['controller']. "')), 
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

<?php echo "\n\n".'<?php $this->end(); ?>'; ?>

<?php echo "\n\n".'<?php $this->start(\'related\'); ?>'; ?>
<div class="row-fluid">
	<div class="accordion" id="accordion1">
		<?php
		if (empty($associations['hasMany'])) {
			$associations['hasMany'] = array();
		}
		if (empty($associations['hasAndBelongsToMany'])) {
			$associations['hasAndBelongsToMany'] = array();
		}

		$relations = array_merge($associations['hasMany'], $associations['hasAndBelongsToMany']);

		$i=0;
	foreach ($relations as $alias => $details):
		$otherSingularVar = Inflector::variable($alias);
		$otherPluralHumanName = Inflector::humanize($details['controller']);
		++$i;
		?>

		<?php echo "<?php if (!empty(\${$singularVar}['{$alias}'])): ?>\n"; ?>
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" href="#coluna<?=$i?>">
				  <?php echo "<? echo ucfirst(__('".$otherPluralHumanName."'))\n ?>"; ?>
				  <span class="icon12 entypo-icon-minus-2 gray"></span>
				</a>
				</div>
				<div id="coluna<?=$i?>" class="accordion-body collapse" style="height: 0px; ">
				<div class="accordion-inner">
				  <?php
					echo "<?php ";
					echo "\n\t\t\t\$displayFields = array(";
					foreach ($details['fields'] as $field) {
						echo "
						ucfirst(__('" . $field . "')) => '$alias.$field',";
					} 					
					echo "\n\t\t\t);";
					 
					echo "\n\t\t\techo \$this->Table->createTable(
						'$alias',
						\${$singularVar}['{$alias}'],
						\$displayFields,
						array('view'),
						'<h3>Atualmente você não tem propriedades enumeradas</h3>'
					);";
					echo "?>\n";
					?>
				</div>
			</div>
		</div>
	   	<?php echo "<?php endif; ?>\n\n"; ?>
	<?php endforeach; ?>
	</div>
</div>
<?php echo '<?php $this->end(); ?>'; ?>