<?php
/**
 * FotoFixture
 *
 */
class FotoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'foto';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true),
		'url' => array('type' => 'string', 'null' => true),
		'datafoto' => array('type' => 'date', 'null' => true),
		'descricao' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'thumbnail' => array('type' => 'string', 'null' => true),
		'galeria_id' => array('type' => 'integer', 'null' => true),
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'url' => 'Lorem ipsum dolor sit amet',
			'datafoto' => '2013-08-10',
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'thumbnail' => 'Lorem ipsum dolor sit amet',
			'galeria_id' => 1
		),
	);

}
