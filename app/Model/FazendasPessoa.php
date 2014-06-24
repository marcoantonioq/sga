<?php
App::uses('AppModel', 'Model');
/**
 * FazendasPessoa Model
 *
 * @property Fazenda $Fazenda
 * @property Pessoa $Pessoa
 */
class FazendasPessoa extends AppModel {
	public $displayField = 'id';
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
		'pessoa_id' => array(
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
		'Pessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'pessoa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
