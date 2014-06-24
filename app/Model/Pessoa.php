<?php
App::uses('AppModel', 'Model');
/**
 * Pessoa Model
 *
 * @property Sexo $Sexo
 * @property Pessoa $ParentPessoa
 * @property Pessoa $ChildPessoa
 * @property Fazenda $Fazenda
 * @property Cargo $Cargo
 */
class Pessoa extends AppModel {
	public $displayField = 'name';
/**
 * Behaviors
 *
 * @var array
 */
	public $actsAs = array(
		'Tree',
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
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
		'contabanco' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nascimento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'carteiratrabalho' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cpf' => array(
			'cpf' => array(
				'rule' => array('validaCPF', 'isUnique', 'notempty'),
				'message' => 'Verifique o número digitado. Informação obrigatória para geração de certificado'
			),
			'unique' => array(
                'required' => true,
                'allowEmpty' => false,
                'rule' => 'isUnique',
                'message' => 'CPF já está em uso. Informação obrigatória para geração de certificado.'
            ),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Informação obrigatória para geração de certificado'
			),
			'between' => array(
                'rule'    => array('maxlength', 14),
                'message' => 'No minimo 14 carácter'
            )
		),
		'rg' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cidade' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'telefone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'datecontratado' => array(
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
		'Sexo' => array(
			'className' => 'Sexo',
			'foreignKey' => 'sexo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ParentPessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'parent_id',
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
		'ChildPessoa' => array(
			'className' => 'Pessoa',
			'foreignKey' => 'parent_id',
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
		'Fazenda' => array(
			'className' => 'Fazenda',
			'joinTable' => 'fazendas_pessoas',
			'foreignKey' => 'pessoa_id',
			'associationForeignKey' => 'fazenda_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Cargo' => array(
			'className' => 'Cargo',
			'joinTable' => 'pessoas_cargos',
			'foreignKey' => 'pessoa_id',
			'associationForeignKey' => 'cargo_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public function beforeSave($options='')
	{
		$this->data['Pessoa']['cpf'] = str_replace(array('.', '-'), '', $this->data['Pessoa']['cpf']);
		if (empty($this->data['Pessoa']['password'])) { # empty password -> não update
            unset($this->data['Pessoa']['password']);
        } else {
        	$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
            //$this->data['Pessoa']['password'] = Security::hash($this->data['Pessoa']['password'], null, true);
        }
        //echo "<hr>"; pr($this->data); exit;
	    return true;
	}

	public function validaCPF($check){
    	$cpf = $check['cpf'];
    	$cpf = preg_replace('/[^0-9]/', '', $cpf);

    	if( strlen($cpf) != 11) {
    		return false;
    	}

    	$digitoA = 0;
    	$digitoB = 0;
    	for($i = 0, $x = 10; $i <= 8; $i++, $x--){
    		$digitoA += $cpf[$i] * $x;
    	}

    	for($i = 0, $x = 11; $i <= 9; $i++, $x--){
    		if (str_repeat($i, 11) == $cpf) { return false; }
    		$digitoB += $cpf[$i] * $x;
    	}

    	$somaA = ( ($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11);
    	$somaB = ( ($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);

    	if($somaA != $cpf[9] || $somaB != $cpf[10]){
    		return false;
    	}else{
    		return true;
    	}
    	
    	return false;
    }

}
