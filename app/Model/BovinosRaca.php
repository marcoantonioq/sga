<?php
App::uses('AppModel', 'Model');
/**
 * BovinosRaca Model
 *
 * @property Bovino $Bovino
 * @property Raca $Raca
 */
class BovinosRaca extends AppModel {
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'bovino_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'raca_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'percentual' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bovino' => array(
			'className' => 'Bovino',
			'foreignKey' => 'bovino_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Raca' => array(
			'className' => 'Raca',
			'foreignKey' => 'raca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
