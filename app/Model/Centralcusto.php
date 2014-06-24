<?php
App::uses('AppModel', 'Model');
/**
 * Centralcusto Model
 *
 * @property Compra $Compra
 * @property Custo $Custo
 * @property Venda $Venda
 */
class Centralcusto extends AppModel {
	public $displayField = 'mes';
	public $order = array('mes'=>'DESC');
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'mes' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Custo' => array(
			'className' => 'Custo',
			'foreignKey' => 'centralcusto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Fornecimento' => array(
			'className' => 'Fornecimento',
			'foreignKey' => 'centralcusto_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Pagamento' => array(
			'className' => 'Pagamento',
			'foreignKey' => 'centralcusto_id',
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
		'Compra' => array(
			'className' => 'Compra',
			'joinTable' => 'centralcustos_compras',
			'foreignKey' => 'centralcusto_id',
			'associationForeignKey' => 'compra_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Venda' => array(
			'className' => 'Venda',
			'joinTable' => 'centralcustos_vendas',
			'foreignKey' => 'centralcusto_id',
			'associationForeignKey' => 'venda_id',
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
