<?php
App::uses('AppController', 'Controller');
/**
 * Fazendas Controller
 *
 * @property Fazenda $Fazenda
 * @property PaginatorComponent $Paginator
 */
class FazendasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Fazendas');
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
		$this->Fazenda->recursive = 0;
		$this->set('fazendas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fazenda->exists($id)) {
			throw new NotFoundException(__('Inválido fazenda'));
		}
		$options = array('conditions' => array('Fazenda.' . $this->Fazenda->primaryKey => $id));
		$this->set('fazenda', $this->Fazenda->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fazenda->create();
			if ($this->Fazenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$clientes = $this->Fazenda->Cliente->find('list');
		$fornecedores = $this->Fazenda->Fornecedore->find('list');
		$pessoas = $this->Fazenda->Pessoa->find('list');
		$this->set(compact('clientes', 'fornecedores', 'pessoas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fazenda->exists($id)) {
			throw new NotFoundException(__('Inválido fazenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fazenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Fazenda.' . $this->Fazenda->primaryKey => $id));
			$this->request->data = $this->Fazenda->find('first', $options);
		}
		$clientes = $this->Fazenda->Cliente->find('list');
		$fornecedores = $this->Fazenda->Fornecedore->find('list');
		$pessoas = $this->Fazenda->Pessoa->find('list');
		$this->set(compact('clientes', 'fornecedores', 'pessoas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fazenda->id = $id;
		if (!$this->Fazenda->exists()) {
			throw new NotFoundException(__('Inválido fazenda'));
		}
		// $this->request->onlyAllow('post', 'delete');
		if ($this->Fazenda->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
