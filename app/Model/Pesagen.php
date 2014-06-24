<?php
App::uses('AppModel', 'Model');
/**
 * Pesagen Model
 *
 * @property Bovino $Bovino
 * @property Pasto $Pasto
 */
class Pesagen extends AppModel {
	public $displayField = 'title';
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
		'peso' => array(
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
		'Pasto' => array(
			'className' => 'Pasto',
			'foreignKey' => 'pasto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
