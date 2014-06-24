<?php
App::uses('Semem', 'Model');

/**
 * Semem Test Case
 *
 */
class SememTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.semem'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Semem = ClassRegistry::init('Semem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Semem);

		parent::tearDown();
	}

}
