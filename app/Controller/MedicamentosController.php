<?php
App::uses('AppController', 'Controller');
/**
 * Medicamentos Controller
 *
 * @property Medicamento $Medicamento
 * @property PaginatorComponent $Paginator
 */
class MedicamentosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Medicamentos');
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
		$this->Medicamento->recursive = 0;
		$this->set('medicamentos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Inválido medicamento'));
		}
		$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
		$this->set('medicamento', $this->Medicamento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medicamento->create();
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->Medicamento->Fazenda->find('list');
		$fabricantes = $this->Medicamento->Fabricante->find('list');
		$bovinos = $this->Medicamento->Bovino->find('list');
		$this->set(compact('fazendas', 'fabricantes', 'bovinos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Inválido medicamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
			$this->request->data = $this->Medicamento->find('first', $options);
		}
		$fazendas = $this->Medicamento->Fazenda->find('list');
		$fabricantes = $this->Medicamento->Fabricante->find('list');
		$bovinos = $this->Medicamento->Bovino->find('list');
		$this->set(compact('fazendas', 'fabricantes', 'bovinos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Medicamento->id = $id;
		if (!$this->Medicamento->exists()) {
			throw new NotFoundException(__('Inválido medicamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Medicamento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
