<?php
App::uses('Galerium', 'Model');

/**
 * Galerium Test Case
 *
 */
class GaleriumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.galerium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Galerium = ClassRegistry::init('Galerium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Galerium);

		parent::tearDown();
	}

}
