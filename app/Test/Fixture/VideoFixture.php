<?php
/**
 * VideoFixture
 *
 */
class VideoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'video';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => true),
		'url' => array('type' => 'string', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet'
		),
	);

}
