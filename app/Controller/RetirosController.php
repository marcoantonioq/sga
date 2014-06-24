<?php
App::uses('AppController', 'Controller');
/**
 * Retiros Controller
 *
 * @property Retiro $Retiro
 * @property PaginatorComponent $Paginator
 */
class RetirosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Retiros');
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
		$this->Retiro->recursive = 0;
		$this->set('retiros', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Retiro->exists($id)) {
			throw new NotFoundException(__('Inválido retiro'));
		}
		$options = array('conditions' => array('Retiro.' . $this->Retiro->primaryKey => $id));
		$this->set('retiro', $this->Retiro->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Retiro->create();
			if ($this->Retiro->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->Retiro->Fazenda->find('list');
		$this->set(compact('fazendas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Retiro->exists($id)) {
			throw new NotFoundException(__('Inválido retiro'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Retiro->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Retiro.' . $this->Retiro->primaryKey => $id));
			$this->request->data = $this->Retiro->find('first', $options);
		}
		$fazendas = $this->Retiro->Fazenda->find('list');
		$this->set(compact('fazendas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Retiro->id = $id;
		if (!$this->Retiro->exists()) {
			throw new NotFoundException(__('Inválido retiro'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Retiro->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
