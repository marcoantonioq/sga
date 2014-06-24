<?php
App::uses('AppController', 'Controller');
/**
 * Fabricantes Controller
 *
 * @property Fabricante $Fabricante
 * @property PaginatorComponent $Paginator
 */
class FabricantesController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Fabricantes');
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
		$this->Fabricante->recursive = 0;
		$this->set('fabricantes', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fabricante->exists($id)) {
			throw new NotFoundException(__('Inválido fabricante'));
		}
		$options = array('conditions' => array('Fabricante.' . $this->Fabricante->primaryKey => $id));
		$this->set('fabricante', $this->Fabricante->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fabricante->create();
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fabricante->exists($id)) {
			throw new NotFoundException(__('Inválido fabricante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fabricante->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Fabricante.' . $this->Fabricante->primaryKey => $id));
			$this->request->data = $this->Fabricante->find('first', $options);
		}
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fabricante->id = $id;
		if (!$this->Fabricante->exists()) {
			throw new NotFoundException(__('Inválido fabricante'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fabricante->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
