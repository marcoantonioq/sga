<?php
/**
 * AlertsGroupFixture
 *
 */
class AlertsGroupFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'alert_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_alertas_has_groups_groups1_idx' => array('column' => 'group_id', 'unique' => 0),
			'fk_alertas_has_groups_alertas1_idx' => array('column' => 'alert_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'alert_id' => 1,
			'group_id' => 1
		),
	);

}
