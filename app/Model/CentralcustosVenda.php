<?php
App::uses('AppModel', 'Model');
/**
 * CentralcustosVenda Model
 *
 * @property Centralcusto $Centralcusto
 * @property Venda $Venda
 */
class CentralcustosVenda extends AppModel {
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'centralcusto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'venda_id' => array(
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
		'Centralcusto' => array(
			'className' => 'Centralcusto',
			'foreignKey' => 'centralcusto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Venda' => array(
			'className' => 'Venda',
			'foreignKey' => 'venda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
