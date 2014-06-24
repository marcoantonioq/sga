<?php
App::uses('AppController', 'Controller');
/**
 * Alerts Controller
 *
 * @property Alert $Alert
 * @property PaginatorComponent $Paginator
 */
class AlertsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Alerts');
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
		$this->Alert->recursive = 0;
		$this->set('alerts', $this->Paginator->paginate());
		$this->Auth->allow('alerts');
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alert->exists($id)) {
			throw new NotFoundException(__('Inválido alert'));
		}
		$options = array('conditions' => array('Alert.' . $this->Alert->primaryKey => $id));
		$this->set('alert', $this->Alert->find('first', $options));
	}

	public function alerts( )
	{
		if ($this->request->is('requested')) {
			$this->Alert->recursive = 1;
			return $this->Alert->find('all');
		}
		return $this->redirect('/');
		return $this->redirect($this->referer());
		
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alert->create();
			if ($this->Alert->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$groups = $this->Alert->Group->find('list');
		$users = $this->Alert->User->find('list');
		$this->set(compact('groups', 'users'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Alert->exists($id)) {
			throw new NotFoundException(__('Inválido alert'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alert->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Alert.' . $this->Alert->primaryKey => $id));
			$this->request->data = $this->Alert->find('first', $options);
		}
		$groups = $this->Alert->Group->find('list');
		$users = $this->Alert->User->find('list');
		$this->set(compact('groups', 'users'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Alert->id = $id;
		if (!$this->Alert->exists()) {
			throw new NotFoundException(__('Inválido alert'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Alert->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
