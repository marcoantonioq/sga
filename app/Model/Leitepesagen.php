<?php
App::uses('AppModel', 'Model');
/**
 * Leitepesagen Model
 *
 * @property Bovino $Bovino
 * @property Ordenha $Ordenha
 */
class Leitepesagen extends AppModel {
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
			'garrote' =>array(
				'rule' => array('garrote'),
				'message'=>'Não possui cria (bezerro/garrote)?',
			)
		),
		'ordenha_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'peso' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		// 'data' => array(
		// 	'datetime' => array(
		// 		'rule' => array('datetime'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
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
		'Ordenha' => array(
			'className' => 'Ordenha',
			'foreignKey' => 'ordenha_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function beforeSave($value='')
	{
		if (!empty($this->data['Leitepesagen']['bovino_id'])) 
		{
			$bovino_id = $this->data['Leitepesagen']['bovino_id'];
			$garrote = $this->Bovino->Garrote->find('first', array(
				'order' => array('Garrote.datanascimento DESC'),
				'conditions'=> array(
					'Garrote.bovino_id'=>$bovino_id,
				)
			));
			if(!empty($garrote))
			{
				$garrote['Garrote']['totalpesagem'] += $this->data['Leitepesagen']['peso'];
				$this->data['Leitepesagen']['garrote'] = $garrote['Garrote']['id'];
				$this->Bovino->Garrote->save($garrote['Garrote']);
			}
			else{
				return "Não existe garrote!!!";
			}
		}
	}

	public function garrote($value='')
	{
		$bovino_id = $this->data['Leitepesagen']['bovino_id'];
		$garrote = $this->Bovino->Garrote->find('first', array(
			'recursive'=>-1,
			'order' => array('Garrote.datanascimento DESC'),
			'conditions'=> array(
				'Garrote.bovino_id'=>$bovino_id,
			)
		));
		if(empty($garrote))
		{
			return false;
		}
		else{
			return true;
		}
	}
}
