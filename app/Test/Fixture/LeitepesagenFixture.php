<?php
/**
 * LeitepesagenFixture
 *
 */
class LeitepesagenFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'bovino_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'index'),
		'ordenha_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'peso' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '5,2'),
		'data' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'descricao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_leitepesagens_ordenhas1_idx' => array('column' => 'ordenha_id', 'unique' => 0),
			'fk_leitepesagens_bovinos1_idx' => array('column' => 'bovino_id', 'unique' => 0)
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
			'ordenha_id' => 1,
			'peso' => 1,
			'data' => '2014-03-28 19:46:25',
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
