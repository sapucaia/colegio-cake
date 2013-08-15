<?php
App::uses('Noticium', 'Model');

/**
 * Noticium Test Case
 *
 */
class NoticiumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Noticium = ClassRegistry::init('Noticium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Noticium);

		parent::tearDown();
	}

}
