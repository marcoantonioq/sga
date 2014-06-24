<?php
App::uses('Garrote', 'Model');

/**
 * Garrote Test Case
 *
 */
class GarroteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.garrote',
		'app.bovinos'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Garrote = ClassRegistry::init('Garrote');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Garrote);

		parent::tearDown();
	}

}
