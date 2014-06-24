<?php
App::uses('AppModel', 'Model');
/**
 * Compra Model
 *
 * @property Fornecedore $Fornecedore
 * @property Patrimonio $Patrimonio
 * @property Centralcusto $Centralcusto
 */
class Compra extends AppModel {
	public $displayField = 'nome';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'Fornecedore' => array(
			'className' => 'Fornecedore',
			'foreignKey' => 'fornecedore_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Patrimonio' => array(
			'className' => 'Patrimonio',
			'foreignKey' => 'compra_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Centralcusto' => array(
			'className' => 'Centralcusto',
			'joinTable' => 'centralcustos_compras',
			'foreignKey' => 'compra_id',
			'associationForeignKey' => 'centralcusto_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
