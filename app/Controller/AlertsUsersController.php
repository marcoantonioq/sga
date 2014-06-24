<?php
App::uses('AppController', 'Controller');
/**
 * AlertsUsers Controller
 *
 * @property AlertsUser $AlertsUser
 * @property PaginatorComponent $Paginator
 */
class AlertsUsersController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'AlertsUsers');
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		parent::index();
		$this->AlertsUser->recursive = 0;
		$this->set('alertsUsers', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlertsUser->exists($id)) {
			throw new NotFoundException(__('Inválido alerts user'));
		}
		$options = array('conditions' => array('AlertsUser.' . $this->AlertsUser->primaryKey => $id));
		$this->set('alertsUser', $this->AlertsUser->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlertsUser->create();
			if ($this->AlertsUser->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$alerts = $this->AlertsUser->Alert->find('list');
		$users = $this->AlertsUser->User->find('list');
		$this->set(compact('alerts', 'users'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AlertsUser->exists($id)) {
			throw new NotFoundException(__('Inválido alerts user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AlertsUser->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('AlertsUser.' . $this->AlertsUser->primaryKey => $id));
			$this->request->data = $this->AlertsUser->find('first', $options);
		}
		$alerts = $this->AlertsUser->Alert->find('list');
		$users = $this->AlertsUser->User->find('list');
		$this->set(compact('alerts', 'users'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AlertsUser->id = $id;
		if (!$this->AlertsUser->exists()) {
			throw new NotFoundException(__('Inválido alerts user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlertsUser->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
