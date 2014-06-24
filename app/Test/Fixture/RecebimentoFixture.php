<?php
/**
 * RecebimentoFixture
 *
 */
class RecebimentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'quote_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'ncheque' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'venciemtno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'documento' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'emissao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'vencimento' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'recebimento' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_recebimentos_quotes1_idx' => array('column' => 'quote_id', 'unique' => 0)
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
			'quote_id' => 1,
			'ncheque' => 'Lorem ipsum dolor sit amet',
			'valor' => 'Lorem ipsum dolor sit amet',
			'venciemtno' => 'Lorem ipsum dolor sit amet',
			'documento' => 'Lorem ipsum dolor sit amet',
			'emissao' => '2014-06-16 20:49:22',
			'vencimento' => '2014-06-16 20:49:22',
			'recebimento' => '2014-06-16 20:49:22'
		),
	);

}
