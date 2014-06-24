<?php
App::uses('Centralcusto', 'Model');

/**
 * Centralcusto Test Case
 *
 */
class CentralcustoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.centralcusto',
		'app.custo',
		'app.centralcustos_custo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Centralcusto = ClassRegistry::init('Centralcusto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Centralcusto);

		parent::tearDown();
	}

}
