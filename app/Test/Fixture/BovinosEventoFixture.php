<?php
/**
 * BovinosEventoFixture
 *
 */
class BovinosEventoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'bovino_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'evento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_bovinos_has_eventos_eventos1_idx' => array('column' => 'evento_id', 'unique' => 0),
			'fk_bovinos_has_eventos_bovinos1_idx' => array('column' => 'bovino_id', 'unique' => 0)
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
			'bovino_id' => 1,
			'evento_id' => 1,
			'created' => '2014-05-09 13:43:35',
			'updated' => '2014-05-09 13:43:35',
			'status' => 1
		),
	);

}
