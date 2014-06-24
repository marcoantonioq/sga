<?php
App::uses('AppModel', 'Model');
/**
 * MedicamentosBovino Model
 *
 * @property Medicamento $Medicamento
 * @property Bovino $Bovino
 */
class MedicamentosBovino extends AppModel {
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'medicamento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Medicamento' => array(
			'className' => 'Medicamento',
			'foreignKey' => 'medicamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bovino' => array(
			'className' => 'Bovino',
			'foreignKey' => 'bovino_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
