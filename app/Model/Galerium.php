<?php

App::uses('AppModel', 'Model');

/**
 * Galerium Model
 *
 */
class Galerium extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nomegaleria';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nomegaleria' => array(
            'maxlength' => array(
                'rule' => array('maxlength',255),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'notempty' => array(
                'rule' => array('notempty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'datagaleria' => array(
            'date' => array(
                'rule' => array('date'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'capa' => array(
            'url' => array(
                'rule' => array('url'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    public $hasMany = array('Foto');

}
