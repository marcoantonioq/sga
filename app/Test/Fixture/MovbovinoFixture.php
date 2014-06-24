<?php
/**
 * MovbovinoFixture
 *
 */
class MovbovinoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'bovinos_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'pasto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'pastoanterior' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_movbovinos_bovinos1_idx' => array('column' => 'bovinos_id', 'unique' => 0),
			'fk_movbovinos_pastos1_idx' => array('column' => 'pasto_id', 'unique' => 0)
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
			'bovinos_id' => 1,
			'pasto_id' => 1,
			'pastoanterior' => 'Lorem ipsum dolor sit amet',
			'data' => '2014-03-28 19:46:09'
		),
	);

}
