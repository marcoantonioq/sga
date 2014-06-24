<?php
App::uses('AppModel', 'Model');
/**
 * Movbovino Model
 *
 * @property Bovino $Bovino
 * @property Pasto $Pasto
 */
class Movbovino extends AppModel {
	public $displayField = 'data';
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
			'bovino_status' =>array(
				'rule' => array('bovino_status'),
				'message' => 'Animal inátivo! :(',
			)
		),
		'pasto_id' => array(
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

	public function bovino_status($options = array()){
		$bovino = $this->Bovino->find('first', 
			array(
				'recursive'=>-1,
				'conditions'=>array(
					'Bovino.id' => $this->data['Movbovino']['bovino_id']
				)
			)
		);

		if( !empty($bovino['Bovino']['status']) && $bovino['Bovino']['status'] == 1)
		{
			// echo "Bovino status false! Por favor, animal inativo";			
			return true;
		}
		return false;
	}


	public function afterSave($created, $options = array()){
		if($created){			
			$id = $this->data['Movbovino']['bovino_id'];
			$bovino = $this->Bovino->find('first', array(
				'recursive'=>-1,
				'conditions'=>array('Bovino.id'=>$id)
			));
			$bovino['Bovino']['pasto_id'] = $this->data['Movbovino']['pasto_id'];
			$this->Bovino->save($bovino);
		}
	}

	/**** Validações ****/

	public function pasto($check = array()){
		$bovino = $this->Bovino->find('first', 
			array(
				'recursive'=>-1,
				'conditions'=>array(
					'Bovino.id' => $this->data['Movbovino']['bovino_id']
				)
			)
		);

		$pastoanterior = $bovino['Bovino']['pasto_id'];
		$pasto = $this->data['Movbovino']['pasto_id'];

		if( $pasto == $pastoanterior)
		{
			return false;
		}
		else
		{
			$this->data['Movbovino']['pastoanterior'] = $pastoanterior;
		}
		return true;
	}
}
