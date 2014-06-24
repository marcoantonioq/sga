<?php echo "<?php \$this->extend('/Common/".$action."') ?>"; ?>

<?php echo "<?php \$this->assign('title', '$modelClass'); ?>"; ?>

<?php echo "<?php \$this->start('contents'); ?>"; ?>

<?php echo "<?php echo \$this->Form->create('{$modelClass}', array('enctype' => 'multipart/form-data')); ?>\n"; ?>

<?php echo '
<?php 
	$this->Form->inputDefaults(array(
	    \'label\' => false,
	    \'class\' => \'span12\',
	));
?>'."\n"; ?>

	<?php
	echo "<div class='tabbable'>";
        echo "
        <ul class='nav nav-tabs'>
            <li class='active'>
                <a href='#tab".$pluralVar."' data-toggle='tab'><?php echo ucfirst(__('".$pluralVar."')); ?></a>
            </li>
        </ul>
        <div class='tab-content'>
        	<div class='tab-pane active' id='tab$pluralVar'>";
				echo "
				<?php ";
				foreach ($fields as $field) {
					if (strpos($action, 'add') !== false && $field == $primaryKey) {
						continue;
					} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
					echo "\n
					echo \$this->Form->input('$field', array(
						'label'=>ucfirst(__('$field')),
					));";
					}
				}
				if (!empty($associations['hasAndBelongsToMany'])) {
					foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
					echo "\n
					echo \$this->Form->input('$assocName', array(
						'label'=>ucfirst(__('$assocName')),
					));";
					}
				}
				echo "
				?>";
				echo "\n\t\t</div>";
		echo "\n\t</div>";
    echo "\n</div>";

?>

<div class="row-fluid">
	<div class="form-actions">
		<button type="submit" class="btn btn-info"><?php echo __('Save'); ?></button>
		<?php 
		echo "<?php ";
		echo "
		echo \$this->Html->link('Cancel',
			array('action'=>'index'),
			array('class'=>'btn btn-warning')
		);";
		echo "\n?>";
		?>
	</div>	
</div>

<?php echo "<?php \$this->start('box'); ?>"; ?>

	<?php 
		$done = array();
		foreach ($associations as $type => $data) {
			foreach ($data as $alias => $details) {
				if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
					echo "
					<?php echo \$this->Link->icon('".Inflector::humanize($details['controller'])."', 
						null,
						array('controller' => '{$details['controller']}', 'action' => 'index'),
						array('class'=> 'btn btn-block')
					); ?>";
					$done[] = $details['controller'];
				}
			}
		}
	?>

<?php echo "<?php \$this->end(); ?>"; ?>

<?php echo "\n\n<?php \$this->end(); ?>"; ?>