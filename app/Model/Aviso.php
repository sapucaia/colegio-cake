<?php
App::uses('AppModel', 'Model');
/**
 * Aviso Model
 *
 */
class Aviso extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'aviso';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'aviso';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'data' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'aviso' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
