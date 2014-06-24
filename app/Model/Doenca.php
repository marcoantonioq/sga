<?php
App::uses('AppModel', 'Model');
/**
 * Doenca Model
 *
 * @property Evento $Evento
 */
class Doenca extends AppModel {
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'eventos_doencas',
			'foreignKey' => 'doenca_id',
			'associationForeignKey' => 'evento_id',
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
