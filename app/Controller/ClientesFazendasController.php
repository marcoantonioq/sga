<?php
App::uses('AppController', 'Controller');
/**
 * ClientesFazendas Controller
 *
 * @property ClientesFazenda $ClientesFazenda
 * @property PaginatorComponent $Paginator
 */
class ClientesFazendasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'ClientesFazendas');
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
		$this->ClientesFazenda->recursive = 0;
		$this->set('clientesFazendas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientesFazenda->exists($id)) {
			throw new NotFoundException(__('Inválido clientes fazenda'));
		}
		$options = array('conditions' => array('ClientesFazenda.' . $this->ClientesFazenda->primaryKey => $id));
		$this->set('clientesFazenda', $this->ClientesFazenda->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientesFazenda->create();
			if ($this->ClientesFazenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$clientes = $this->ClientesFazenda->Cliente->find('list');
		$fazendas = $this->ClientesFazenda->Fazenda->find('list');
		$this->set(compact('clientes', 'fazendas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientesFazenda->exists($id)) {
			throw new NotFoundException(__('Inválido clientes fazenda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientesFazenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('ClientesFazenda.' . $this->ClientesFazenda->primaryKey => $id));
			$this->request->data = $this->ClientesFazenda->find('first', $options);
		}
		$clientes = $this->ClientesFazenda->Cliente->find('list');
		$fazendas = $this->ClientesFazenda->Fazenda->find('list');
		$this->set(compact('clientes', 'fazendas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ClientesFazenda->id = $id;
		if (!$this->ClientesFazenda->exists()) {
			throw new NotFoundException(__('Inválido clientes fazenda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientesFazenda->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
