<?php
App::uses('AppController', 'Controller');
/**
 * Atalhos Controller
 *
 * @property Atalho $Atalho
 * @property PaginatorComponent $Paginator
 */
class AtalhosController extends AppController {

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
		if ($this->request->is('post')) {
			$return = $this->Atalho->action($this->request->data);
			$this->Session->setFlash((empty($return)?'Nada realizado!':$return), 'info');
		}
		$this->Atalho->recursive = 0;
		$this->set('atalhos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Atalho->exists($id)) {
			throw new NotFoundException(__('Inválido atalho'));
		}
		$options = array('conditions' => array('Atalho.' . $this->Atalho->primaryKey => $id));
		$this->set('atalho', $this->Atalho->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Atalho->create();
			if ($this->Atalho->save($this->request->data)) {
				$this->Session->setFlash(__('O atalho foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O atalho não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$users = $this->Atalho->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Atalho->exists($id)) {
			throw new NotFoundException(__('Inválido atalho'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atalho->save($this->request->data)) {
				$this->Session->setFlash(__('O atalho foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O atalho não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Atalho.' . $this->Atalho->primaryKey => $id));
			$this->request->data = $this->Atalho->find('first', $options);
		}
		$users = $this->Atalho->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Atalho->id = $id;
		if (!$this->Atalho->exists()) {
			throw new NotFoundException(__('Inválido atalho'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Atalho->delete()) {
	
			$this->Session->setFlash(__('O atalho foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('O atalho não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * request method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function listUser(){
		$user_id = $this->Session->read('Auth.User.id');
		if ($this->request->is('requested')) {
			return $atalhos = $this->Atalho->find('all', array(
				'recursive'=>-1,
				'conditions'=>array(
					'Atalho.user_id'=>$user_id
				)
			));
		}
		return false;
	}
}
