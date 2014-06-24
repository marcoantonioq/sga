<?php
/**
 * VendaFixture
 *
 */
class VendaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'produto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cliente_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'patrimonio_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'key' => 'index'),
		'quantidade' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2', 'comment' => '0 - Debito'),
		'pago' => array('type' => 'boolean', 'null' => true, 'default' => '0', 'comment' => 'Patrimonio'),
		'emissao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_vendas_clientes1_idx' => array('column' => 'cliente_id', 'unique' => 0),
			'fk_vendas_patrimonios1_idx' => array('column' => 'patrimonio_id', 'unique' => 0),
			'fk_vendas_produtos1_idx' => array('column' => 'produto_id', 'unique' => 0)
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
			'produto_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'cliente_id' => 1,
			'patrimonio_id' => 1,
			'quantidade' => 'Lorem ipsum dolor sit amet',
			'valor' => 1,
			'pago' => 1,
			'emissao' => '2014-04-25 06:18:05'
		),
	);

}
