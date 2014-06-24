<?php
/**
 * CentralcustosCompraFixture
 *
 */
class CentralcustosCompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'centralcusto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'compra_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_centralcustos_has_compras_compras1_idx' => array('column' => 'compra_id', 'unique' => 0),
			'fk_centralcustos_has_compras_centralcustos1_idx' => array('column' => 'centralcusto_id', 'unique' => 0)
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
			'compra_id' => 1
		),
	);

}
