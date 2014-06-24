<?php
App::uses('AppModel', 'Model');
/**
 * Patrimonio Model
 *
 * @property Fabricante $Fabricante
 * @property Fazenda $Fazenda
 * @property Categoriap $Categoriap
 * @property Compra $Compra
 * @property Venda $Venda
 */
class Patrimonio extends AppModel {
	public $displayField = 'nome';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'unidade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'comprado' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
		'Fabricante' => array(
			'className' => 'Fabricante',
			'foreignKey' => 'fabricante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fazenda' => array(
			'className' => 'Fazenda',
			'foreignKey' => 'fazenda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categoriap' => array(
			'className' => 'Categoriap',
			'foreignKey' => 'categoriap_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Compra' => array(
			'className' => 'Compra',
			'foreignKey' => 'compra_id',
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
		'Venda' => array(
			'className' => 'Venda',
			'foreignKey' => 'patrimonio_id',
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

}
