<?php
/**
 * RecadoFixture
 *
 */
class RecadoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'recado';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'remetente' => array('type' => 'string', 'null' => true),
		'destinatario' => array('type' => 'string', 'null' => true),
		'datahora' => array('type' => 'datetime', 'null' => true),
		'mensagem' => array('type' => 'text', 'null' => true, 'length' => 1073741824),
		'status' => array('type' => 'integer', 'null' => true),
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
			'remetente' => 'Lorem ipsum dolor sit amet',
			'destinatario' => 'Lorem ipsum dolor sit amet',
			'datahora' => '2013-08-10 22:00:20',
			'mensagem' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1
		),
	);

}
