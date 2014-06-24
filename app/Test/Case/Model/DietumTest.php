<?php
App::uses('Dietum', 'Model');

/**
 * Dietum Test Case
 *
 */
class DietumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dietum'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dietum = ClassRegistry::init('Dietum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dietum);

		parent::tearDown();
	}

}
