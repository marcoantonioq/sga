<?php
App::uses('AppController', 'Controller');
/**
 * Pastos Controller
 *
 * @property Pasto $Pasto
 * @property PaginatorComponent $Paginator
 */
class PastosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Pastos');
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
		$this->Pasto->recursive = 0;
		$this->set('pastos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pasto->exists($id)) {
			throw new NotFoundException(__('Inválido pasto'));
		}
		$options = array('conditions' => array('Pasto.' . $this->Pasto->primaryKey => $id));
		$this->set('pasto', $this->Pasto->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pasto->create();
			if ($this->Pasto->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$retiros = $this->Pasto->Retiro->find('list');
		$this->set(compact('retiros'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pasto->exists($id)) {
			throw new NotFoundException(__('Inválido pasto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pasto->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Pasto.' . $this->Pasto->primaryKey => $id));
			$this->request->data = $this->Pasto->find('first', $options);
		}
		$retiros = $this->Pasto->Retiro->find('list');
		$this->set(compact('retiros'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pasto->id = $id;
		if (!$this->Pasto->exists()) {
			throw new NotFoundException(__('Inválido pasto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pasto->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
