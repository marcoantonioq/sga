<?php
/**
 * MeteorologicoFixture
 *
 */
class MeteorologicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'umidademin' => array('type' => 'integer', 'null' => true, 'default' => null),
		'umidademax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'chuva' => array('type' => 'integer', 'null' => true, 'default' => null, 'comment' => 'mm'),
		'temperaturamin' => array('type' => 'integer', 'null' => true, 'default' => null),
		'temperaturamax' => array('type' => 'integer', 'null' => true, 'default' => null),
		'observacoes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'data' => '2014-04-30 07:20:05',
			'umidademin' => 1,
			'umidademax' => 1,
			'chuva' => 1,
			'temperaturamin' => 1,
			'temperaturamax' => 1,
			'observacoes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
