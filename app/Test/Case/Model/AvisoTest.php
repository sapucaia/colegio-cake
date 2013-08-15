<?php
App::uses('Aviso', 'Model');

/**
 * Aviso Test Case
 *
 */
class AvisoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.aviso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Aviso = ClassRegistry::init('Aviso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aviso);

		parent::tearDown();
	}

}
