<?php
App::uses('AppModel', 'Model');
/**
 * Bovino Model
 *
 * @property Pasto $Pasto
 * @property Categoriab $Categoriab
 * @property Sexobovino $Sexobovino
 * @property Pelagen $Pelagen
 * @property Evento $Evento
 * @property Ic $Ic
 * @property Leitepesagen $Leitepesagen
 * @property Movbovino $Movbovino
 * @property Pesagen $Pesagen
 * @property Raca $Raca
 * @property Medicamento $Medicamento
 */
class Bovino extends AppModel {
	public $displayField = 'nome';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'pai' => array(
			'pai' => array(
				'rule' => array('pai'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'mae' => array(
			'mae' => array(
				'rule' => array('mae'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),		
		'categoriab_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexobovino_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pelagen_id' => array(
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
		'Pasto' => array(
			'className' => 'Pasto',
			'foreignKey' => 'pasto_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true,
            'counterScope' => array(
              'Bovino.status' => true
            )
		),
		'Categoriab' => array(
			'className' => 'Categoriab',
			'foreignKey' => 'categoriab_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => array('Categoriab.bovino_count'),
            'counterScope' => array(
              'Bovino.status' => true
            )
		),
		'Sexobovino' => array(
			'className' => 'Sexobovino',
			'foreignKey' => 'sexobovino_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true,
			'counterScope'=>array('Bovino.status'=>1),
		),
		'Pelagen' => array(
			'className' => 'Pelagen',
			'foreignKey' => 'pelagen_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache'=>true,
			'counterScope'=>array('Bovino.status'=>1),

		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Garrote' => array(
			'className' => 'Garrote',
			'foreignKey' => 'bovino_id',
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
		'Ic' => array(
			'className' => 'Ic',
			'foreignKey' => 'bovino_id',
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
		'Leitepesagen' => array(
			'className' => 'Leitepesagen',
			'foreignKey' => 'bovino_id',
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
		'Movbovino' => array(
			'className' => 'Movbovino',
			'foreignKey' => 'bovino_id',
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
		'Pesagen' => array(
			'className' => 'Pesagen',
			'foreignKey' => 'bovino_id',
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
		'Raca' => array(
			'className' => 'Raca',
			'joinTable' => 'bovinos_racas',
			'foreignKey' => 'bovino_id',
			'associationForeignKey' => 'raca_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Medicamento' => array(
			'className' => 'Medicamento',
			'joinTable' => 'medicamentos_bovinos',
			'foreignKey' => 'bovino_id',
			'associationForeignKey' => 'medicamento_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Evento' => array(
			'className' => 'Evento',
			'joinTable' => 'bovinos_eventos',
			'foreignKey' => 'bovino_id',
			'associationForeignKey' => 'evento_id',
			'unique' => 'keepExisting',
			'conditions' => array('Evento.status'=>'Aberto'),
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
	);

	public function pai($options='')
	{
		$bovino = $this->find('first', array(
			'recursive' => -1,
			'conditions'=>array(
				'Bovino.id' => $this->data['Bovino']['pai']
			)
		));
		return (empty($bovino)) ? "Bovino não existe!":true;
	}

	public function mae($options='')
	{
		$bovino = $this->find('first', array(
			'recursive' => -1,
			'conditions'=>array(
				'Bovino.id' => $this->data['Bovino']['mae']
			)
		));
		return (empty($bovino)) ? "Bovino não existe!":true;
	}

	public function pesagens($bovino_id)
	{
		$pesagens = $this->Leitepesagen->find('all', array(
			'recursive' => -1,
			'order'=>array('data'=>'DESC'),
			'limit'=>'30',
			'conditions'=> array(
				'Leitepesagen.bovino_id' => $bovino_id
			)
		));
		return $pesagens;
	}

	public function beforeSave($option=array())
	{
		// pr($this->data);
		//exit;
	}

	public function afterSave($created, $option=array())
	{
		// echo $created;
		// pr($this->data);
		// exit;
	}

	
	public function search($id, $heranca, $recursive = 4){
		$recursive = ($recursive - 1);
		$bovino = $this->find('first', array('conditions' => array('Bovino.id' => $id)));
		$heranca = $bovino;
		if( 
			( $recursive > 0) && 
			( 
				!empty($bovino['Bovino']['pai']) || 
				!empty($bovino['Bovino']['mae'])
			) 
		)
		{
			$heranca[] = $this->search($bovino['Bovino']['pai'], $heranca, $recursive);
			$heranca[] = $this->search($bovino['Bovino']['mae'], $heranca, $recursive);
		}
		return $heranca;	
	}

	public function heranca($id){
		$this->recursive = -1;
		$heranca = array();
		$heranca = $this->search($id, $heranca);
		return $heranca;
	}
}
