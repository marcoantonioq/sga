<?php
/**
 * MedicamentosBovinoFixture
 *
 */
class MedicamentosBovinoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'medicamento_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'bovino_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'observacoes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 455, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_medicamentos_has_bovinos_bovinos1_idx' => array('column' => 'bovino_id', 'unique' => 0),
			'fk_medicamentos_has_bovinos_medicamentos1_idx' => array('column' => 'medicamento_id', 'unique' => 0)
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
			'medicamento_id' => 1,
			'bovino_id' => 1,
			'observacoes' => 'Lorem ipsum dolor sit amet'
		),
	);

}
