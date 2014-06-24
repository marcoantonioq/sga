<?php
/**
 * BovinosRacaFixture
 *
 */
class BovinosRacaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'bovino_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'raca_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'percentual' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '4,2'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_animais_has_raca_raca1' => array('column' => 'raca_id', 'unique' => 0),
			'fk_animais_has_raca_animais1' => array('column' => 'bovino_id', 'unique' => 0)
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
			'raca_id' => 1,
			'percentual' => 1,
			'created' => '2014-03-27 18:36:01',
			'updated' => '2014-03-27 18:36:01'
		),
	);

}
