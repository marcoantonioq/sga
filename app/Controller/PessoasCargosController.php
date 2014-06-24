<?php
App::uses('AppController', 'Controller');
/**
 * PessoasCargos Controller
 *
 * @property PessoasCargo $PessoasCargo
 * @property PaginatorComponent $Paginator
 */
class PessoasCargosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'PessoasCargos');
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
		$this->PessoasCargo->recursive = 0;
		$this->set('pessoasCargos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PessoasCargo->exists($id)) {
			throw new NotFoundException(__('Inválido pessoas cargo'));
		}
		$options = array('conditions' => array('PessoasCargo.' . $this->PessoasCargo->primaryKey => $id));
		$this->set('pessoasCargo', $this->PessoasCargo->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PessoasCargo->create();
			if ($this->PessoasCargo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$pessoas = $this->PessoasCargo->Pessoa->find('list');
		$cargos = $this->PessoasCargo->Cargo->find('list');
		$this->set(compact('pessoas', 'cargos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PessoasCargo->exists($id)) {
			throw new NotFoundException(__('Inválido pessoas cargo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PessoasCargo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('PessoasCargo.' . $this->PessoasCargo->primaryKey => $id));
			$this->request->data = $this->PessoasCargo->find('first', $options);
		}
		$pessoas = $this->PessoasCargo->Pessoa->find('list');
		$cargos = $this->PessoasCargo->Cargo->find('list');
		$this->set(compact('pessoas', 'cargos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PessoasCargo->id = $id;
		if (!$this->PessoasCargo->exists()) {
			throw new NotFoundException(__('Inválido pessoas cargo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PessoasCargo->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
