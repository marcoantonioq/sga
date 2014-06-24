<?php
/**
 * DietumFixture
 *
 */
class DietumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'inclusao' => array('type' => 'date', 'null' => true, 'default' => null),
		'estoque' => array('type' => 'integer', 'null' => true, 'default' => null),
		'baixa' => array('type' => 'date', 'null' => true, 'default' => null),
		'preco' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'inclusao' => '2014-04-22',
			'estoque' => 1,
			'baixa' => '2014-04-22',
			'preco' => 1
		),
	);

}
