<?php
App::uses('Meteorologico', 'Model');

/**
 * Meteorologico Test Case
 *
 */
class MeteorologicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meteorologico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Meteorologico = ClassRegistry::init('Meteorologico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meteorologico);

		parent::tearDown();
	}

}
