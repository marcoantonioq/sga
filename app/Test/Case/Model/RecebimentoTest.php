<?php
App::uses('Recebimento', 'Model');

/**
 * Recebimento Test Case
 *
 */
class RecebimentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recebimento',
		'app.quote',
		'app.taxa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recebimento = ClassRegistry::init('Recebimento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recebimento);

		parent::tearDown();
	}

}
