<?php
/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'usuario';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nomecompleto' => array('type' => 'string', 'null' => true),
		'login' => array('type' => 'string', 'null' => true),
		'senha' => array('type' => 'string', 'null' => true),
		'datacad' => array('type' => 'date', 'null' => true, 'default' => '2013-02-22'),
		'tipousuario' => array('type' => 'integer', 'null' => true),
		'ultimoacesso' => array('type' => 'date', 'null' => true),
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
			'nomecompleto' => 'Lorem ipsum dolor sit amet',
			'login' => 'Lorem ipsum dolor sit amet',
			'senha' => 'Lorem ipsum dolor sit amet',
			'datacad' => '2013-08-10',
			'tipousuario' => 1,
			'ultimoacesso' => '2013-08-10'
		),
	);

}
