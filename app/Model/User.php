<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Sexo $Sexo
 * @property Group $Group
 * @property Atalho $Atalho
 * @property Ocorrencia $Ocorrencia
 */
class User extends AppModel {
	var $displayField = 'username';
	var $useTable = 'users';

	public $actsAs = array(
		// 'Upload' => array(
		// 	'foto' => array(
	 //            'field' => 'foto',
	 //            'field_dir' => 'foto_dir',
		// 	),
		// 	'avatar' => array(
	 //            'field' => 'foto',
	 //            'field_dir' => 'foto_dir',
		// 	),
  //       ),
	);
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
                'required' => true,
                //'allowEmpty' => false,
                'rule' => 'isUnique',
                'message' => 'Username já está em uso.'
            )
		),
		'email' => array(
			'email' => array(
                'required' => true,
                'allowEmpty' => false,
                'rule' => 'email',
                'message' => 'Email inválido.',
                'last' => true
            ),
            'unique' => array(
                'required' => true,
                'allowEmpty' => false,
                'rule' => 'isUnique',
                'message' => 'e-mail já está em uso.'
            )
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
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
		'Sexo' => array(
			'className' => 'Sexo',
			'foreignKey' => 'sexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => array(
				'user_count' => array('User.status'=>1),
				'user_disable' => array('User.status'=>0),
			),
			'counterScope' => array('User.status' => 1)
		),
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true,
			'counterScope' => array('User.status' => 1)
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Atalho' => array(
			'className' => 'Atalho',
			'foreignKey' => 'user_id',
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
		'Evento' => array(
			'className' => 'Evento',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => array('Evento.status'=>'Aberto'),
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
		'Alert' => array(
			'className' => 'Alert',
			'joinTable' => 'alerts_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'alert_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);


	public function beforeSave($options = array()) {
	    if (empty($this->data['User']['password'])) { 
            unset($this->data['User']['password']);
        } else {
        	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
	    return true;
    }

}
