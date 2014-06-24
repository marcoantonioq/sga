<?php
App::uses('AppController', 'Controller');
/**
 * FazendasFornecedores Controller
 *
 * @property FazendasFornecedore $FazendasFornecedore
 * @property PaginatorComponent $Paginator
 */
class FazendasFornecedoresController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'FazendasFornecedores');
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
		$this->FazendasFornecedore->recursive = 0;
		$this->set('fazendasFornecedores', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FazendasFornecedore->exists($id)) {
			throw new NotFoundException(__('Inválido fazendas fornecedore'));
		}
		$options = array('conditions' => array('FazendasFornecedore.' . $this->FazendasFornecedore->primaryKey => $id));
		$this->set('fazendasFornecedore', $this->FazendasFornecedore->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FazendasFornecedore->create();
			if ($this->FazendasFornecedore->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->FazendasFornecedore->Fazenda->find('list');
		$fornecedores = $this->FazendasFornecedore->Fornecedore->find('list');
		$this->set(compact('fazendas', 'fornecedores'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FazendasFornecedore->exists($id)) {
			throw new NotFoundException(__('Inválido fazendas fornecedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FazendasFornecedore->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('FazendasFornecedore.' . $this->FazendasFornecedore->primaryKey => $id));
			$this->request->data = $this->FazendasFornecedore->find('first', $options);
		}
		$fazendas = $this->FazendasFornecedore->Fazenda->find('list');
		$fornecedores = $this->FazendasFornecedore->Fornecedore->find('list');
		$this->set(compact('fazendas', 'fornecedores'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FazendasFornecedore->id = $id;
		if (!$this->FazendasFornecedore->exists()) {
			throw new NotFoundException(__('Inválido fazendas fornecedore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FazendasFornecedore->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
