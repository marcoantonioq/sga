<?php
/**
 * CompraFixture
 *
 */
class CompraFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fornecedore_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 225, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'quantidade' => array('type' => 'integer', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2'),
		'emissao' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_compras_fornecedores1_idx' => array('column' => 'fornecedore_id', 'unique' => 0)
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
			'fornecedore_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'quantidade' => 1,
			'valor' => 1,
			'emissao' => '2014-04-22 23:43:06',
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2014-04-22 23:43:06',
			'updated' => '2014-04-22 23:43:06'
		),
	);

}
