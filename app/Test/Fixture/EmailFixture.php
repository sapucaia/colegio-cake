<?php
/**
 * EmailFixture
 *
 */
class EmailFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'email';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => true),
		'assunto' => array('type' => 'string', 'null' => true),
		'mensagem' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'remetente' => array('type' => 'string', 'null' => true),
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
			'email' => 'Lorem ipsum dolor sit amet',
			'assunto' => 'Lorem ipsum dolor sit amet',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'remetente' => 'Lorem ipsum dolor sit amet'
		),
	);

}
