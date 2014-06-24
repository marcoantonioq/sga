<?php
App::uses('AppController', 'Controller');
/**
 * Fornecedores Controller
 *
 * @property Fornecedore $Fornecedore
 * @property PaginatorComponent $Paginator
 */
class FornecedoresController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Fornecedores');
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
		$this->Fornecedore->recursive = 0;
		$this->set('fornecedores', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fornecedore->exists($id)) {
			throw new NotFoundException(__('Inválido fornecedore'));
		}
		$options = array('conditions' => array('Fornecedore.' . $this->Fornecedore->primaryKey => $id));
		$this->set('fornecedore', $this->Fornecedore->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fornecedore->create();
			if ($this->Fornecedore->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->Fornecedore->Fazenda->find('list');
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
		if (!$this->Fornecedore->exists($id)) {
			throw new NotFoundException(__('Inválido fornecedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fornecedore->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Fornecedore.' . $this->Fornecedore->primaryKey => $id));
			$this->request->data = $this->Fornecedore->find('first', $options);
		}
		$fazendas = $this->Fornecedore->Fazenda->find('list');
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
		$this->Fornecedore->id = $id;
		if (!$this->Fornecedore->exists()) {
			throw new NotFoundException(__('Inválido fornecedore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fornecedore->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
