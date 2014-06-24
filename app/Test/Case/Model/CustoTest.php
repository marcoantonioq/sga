<?php
App::uses('Custo', 'Model');

/**
 * Custo Test Case
 *
 */
class CustoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.custo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Custo = ClassRegistry::init('Custo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Custo);

		parent::tearDown();
	}

}
