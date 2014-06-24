<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property User $User
 * @property Categoriasevento $Categoriasevento
 * @property Ic $Ic
 * @property Bovino $Bovino
 * @property Doenca $Doenca
 */
class Evento extends AppModel {
	public $displayField = 'nome';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
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
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'categoriasevento_id' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Categoriasevento' => array(
			'className' => 'Categoriasevento',
			'foreignKey' => 'categoriasevento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ic' => array(
			'className' => 'Ic',
			'foreignKey' => 'ic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Bovino' => array(
			'className' => 'Bovino',
			'joinTable' => 'bovinos_eventos',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'bovino_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Doenca' => array(
			'className' => 'Doenca',
			'joinTable' => 'eventos_doencas',
			'foreignKey' => 'evento_id',
			'associationForeignKey' => 'doenca_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public function beforeSave($options = array())
	{
		if($this->data['Evento']['alerta']){

			$this->Categoriasevento->recursive = -1;
			$categoria = $this->Categoriasevento->find('first',array(
				array(
					'recursive'=>-1, 
					'conditions'=>array(
						'Categoriasevento.id'=>$this->data['Evento']['categoriasevento_id']
					)
				)
			));
			$this->User->recursive = -1;
			$user = $this->User->find('first',array(
				array(
					'conditions'=>array(
						'User.id'=>$this->data['Evento']['user_id']
					)
				)
			));

			// pr($this->data);

			$alert = array(
                "titulo" => $this->data['Evento']['nome'],
                "tipo"=> "Evento/Manejo",
                "categoria"=> $categoria['Categoriasevento']['nome'],
                "nivel"=> "1",
                "messagem" => $this->data['Evento']['descricao'],
                "descricao" => "
                	<br>Origem: Evento/Manejo 
                	<br>Categoria: ".$categoria['Categoriasevento']['nome']."
                	<br>Usuário: ".$user['User']['username']."
                	",
			);

			// pr($alert);

			$this->bindModel(array(
				'hasMany'=>array(
					'Alert'=>array(
						'class'=>'Alert'
					)
				)
			));
			// $this->Alert->save($alert);
		}

		if($this->data['Evento']['lancarcalendario']){

			$this->Categoriasevento->recursive = -1;
			$categoria = $this->Categoriasevento->find('first',array(
				array(
					'recursive'=>-1, 
					'conditions'=>array(
						'Categoriasevento.id'=>$this->data['Evento']['categoriasevento_id']
					)
				)
			));
			$this->User->recursive = -1;
			$user = $this->User->find('first',array(
				array(
					'conditions'=>array(
						'User.id'=>$this->data['Evento']['user_id']
					)
				)
			));

			// pr($this->data);

			$alert = array(
                "fazenda_id" => 1,
                "categoriacalendario_id" => 1,
                "titulo" => $this->data['Evento']['nome'],
                "inicio"=> $this->data['Evento']['datainicial'],
                "termino"=> $this->data['Evento']['datafinal'],
                "observacoes" => "
                	<br>Origem: Evento/Manejo 
                	<br>Categoria: ".$categoria['Categoriasevento']['nome']."
                	<br>Usuário: ".$user['User']['username']."
                	",
			);

			// pr($alert);

			$this->bindModel(array(
				'hasMany'=>array(
					'Calendario'=>array(
						'class'=>'Calendario'
					)
				)
			));
			$this->Calendario->save($alert);
		}
	}
}
