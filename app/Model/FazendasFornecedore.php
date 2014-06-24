<?php
App::uses('AppModel', 'Model');
/**
 * FazendasFornecedore Model
 *
 * @property Fazenda $Fazenda
 * @property Fornecedore $Fornecedore
 */
class FazendasFornecedore extends AppModel {
	public $displayField = 'id';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'int';

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
		'fornecedore_id' => array(
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
		'Fornecedore' => array(
			'className' => 'Fornecedore',
			'foreignKey' => 'fornecedore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
