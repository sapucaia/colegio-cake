<?php
/**
 * GaleriumFixture
 *
 */
class GaleriumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'nomegaleria' => array('type' => 'string', 'null' => true),
		'datagaleria' => array('type' => 'date', 'null' => true),
		'capa' => array('type' => 'string', 'null' => true),
		'capa_foto_id' => array('type' => 'integer', 'null' => true),
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
			'nomegaleria' => 'Lorem ipsum dolor sit amet',
			'datagaleria' => '2013-08-10',
			'capa' => 'Lorem ipsum dolor sit amet',
			'capa_foto_id' => 1
		),
	);

}
