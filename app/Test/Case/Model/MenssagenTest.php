<?php
App::uses('Menssagen', 'Model');

/**
 * Menssagen Test Case
 *
 */
class MenssagenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menssagen'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Menssagen = ClassRegistry::init('Menssagen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Menssagen);

		parent::tearDown();
	}

}
