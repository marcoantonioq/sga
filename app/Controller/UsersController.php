<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Usuários');
		parent::beforeFilter();
        $this->Auth->allow('login', 'add', 'logout');
	}	

	/**
     * login method
     *
     * @return void
     */
	function login() {
		$this->set('title_for_layout', 'Login'); // $titleContent
    	$this->layout = 'login';
    	if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash('Logado com sucesso.', 'success');
                $this->User->recursive = -1;
                $data = $this->User->read(null, $this->Auth->user('id'));
                unset($data['User']['password']);
                $data['User']['login'] = date('Y-m-d H:i:s');
                $this->User->create();
				$this->User->save($data);
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Nome de usuário ou senha estava incorreta.');
            }
        }
    }
    /**
     * logout method
     *
     * @return void
     */
    function logout() {
        $this->Session->setFlash('Até logo!', 'success');
        $this->redirect($this->Auth->logout());
    }


/**
 * index method
 *
 * @return void
 */
	public function index() {
		parent::index();
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Inválido user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('O user foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O user não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$sexos = $this->User->Sexo->find('list');
		$groups = $this->User->Group->find('list');
		$this->set(compact('sexos', 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Inválido user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('O user foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O user não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$sexos = $this->User->Sexo->find('list');
		$groups = $this->User->Group->find('list');
		$this->set(compact('sexos', 'groups'));
	}

/**
 * editall method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function editall($id = null) {
		/*if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Inválido user'));
		}*/
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('O user foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O user não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$sexos = $this->User->Sexo->find('list');
		$groups = $this->User->Group->find('list');
		$this->set(compact('sexos', 'groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Inválido user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
	
			$this->Session->setFlash(__('O user foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('O user não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
