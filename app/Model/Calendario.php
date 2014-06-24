<?php
App::uses('AppModel', 'Model');
/**
 * Calendario Model
 *
 * @property Fazenda $Fazenda
 * @property Categoriacalendario $Categoriacalendario
 */
class Calendario extends AppModel {
	public $displayField = 'titulo';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fazenda_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inicio' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoriacalendario_id' => array(
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
		'Fazenda' => array(
			'className' => 'Fazenda',
			'foreignKey' => 'fazenda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categoriacalendario' => array(
			'className' => 'Categoriacalendario',
			'foreignKey' => 'categoriacalendario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
