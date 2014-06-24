<?php
App::uses('AppController', 'Controller');
/**
 * Cargos Controller
 *
 * @property Cargo $Cargo
 * @property PaginatorComponent $Paginator
 */
class CargosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Cargos');
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
		if ($this->request->is('post')) {
			$this->request->data = $this->Cargo->action($this->request->data, $this->Paginator->settings);
			$this->Paginator->settings = $this->Cargo->pagination();
		}
		$this->Cargo->recursive = 0;
		$this->set('cargos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('Inválido cargo'));
		}
		$options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
		$this->set('cargo', $this->Cargo->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cargo->create();
			if ($this->Cargo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$pessoas = $this->Cargo->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cargo->exists($id)) {
			throw new NotFoundException(__('Inválido cargo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cargo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Cargo.' . $this->Cargo->primaryKey => $id));
			$this->request->data = $this->Cargo->find('first', $options);
		}
		$pessoas = $this->Cargo->Pessoa->find('list');
		$this->set(compact('pessoas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cargo->id = $id;
		if (!$this->Cargo->exists()) {
			throw new NotFoundException(__('Inválido cargo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cargo->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
