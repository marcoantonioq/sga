<?php
/**
 * MedicamentoFixture
 *
 */
class MedicamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'fazenda_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'fabricante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'categoria' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notafiscal' => array('type' => 'integer', 'null' => true, 'default' => null),
		'unidade' => array('type' => 'integer', 'null' => false, 'default' => null),
		'valor' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'comprado' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'dose' => array('type' => 'float', 'null' => true, 'default' => null, 'comment' => 'campos: criar conponente add'),
		'validade' => array('type' => 'timestamp', 'null' => true, 'default' => null, 'comment' => 'campos: criar conponente add'),
		'prescricao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'campos: criar conponente add', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_almoxarifados_fabricantes1_idx' => array('column' => 'fabricante_id', 'unique' => 0),
			'fk_almoxarifados_fazendas1_idx' => array('column' => 'fazenda_id', 'unique' => 0)
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
			'fazenda_id' => 1,
			'fabricante_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'categoria' => 'Lorem ipsum dolor sit amet',
			'notafiscal' => 1,
			'unidade' => 1,
			'valor' => 1,
			'comprado' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2014-06-02 15:23:29',
			'dose' => 1,
			'validade' => 1401715409,
			'prescricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
