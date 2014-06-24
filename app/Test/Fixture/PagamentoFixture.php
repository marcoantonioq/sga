<?php
/**
 * PagamentoFixture
 *
 */
class PagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'centralcusto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'pagamentoscol' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'vencimento' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pagamentos_centralcustos1_idx' => array('column' => 'centralcusto_id', 'unique' => 0)
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
			'centralcusto_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'valor' => 1,
			'pagamentoscol' => 'Lorem ipsum dolor sit amet',
			'data' => '2014-06-16 09:54:43',
			'vencimento' => '2014-06-16 09:54:43'
		),
	);

}
