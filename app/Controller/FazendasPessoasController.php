<?php
App::uses('AppController', 'Controller');
/**
 * FazendasPessoas Controller
 *
 * @property FazendasPessoa $FazendasPessoa
 * @property PaginatorComponent $Paginator
 */
class FazendasPessoasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'FazendasPessoas');
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
		$this->FazendasPessoa->recursive = 0;
		$this->set('fazendasPessoas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FazendasPessoa->exists($id)) {
			throw new NotFoundException(__('Inválido fazendas pessoa'));
		}
		$options = array('conditions' => array('FazendasPessoa.' . $this->FazendasPessoa->primaryKey => $id));
		$this->set('fazendasPessoa', $this->FazendasPessoa->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FazendasPessoa->create();
			if ($this->FazendasPessoa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->FazendasPessoa->Fazenda->find('list');
		$pessoas = $this->FazendasPessoa->Pessoa->find('list');
		$this->set(compact('fazendas', 'pessoas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FazendasPessoa->exists($id)) {
			throw new NotFoundException(__('Inválido fazendas pessoa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FazendasPessoa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('FazendasPessoa.' . $this->FazendasPessoa->primaryKey => $id));
			$this->request->data = $this->FazendasPessoa->find('first', $options);
		}
		$fazendas = $this->FazendasPessoa->Fazenda->find('list');
		$pessoas = $this->FazendasPessoa->Pessoa->find('list');
		$this->set(compact('fazendas', 'pessoas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FazendasPessoa->id = $id;
		if (!$this->FazendasPessoa->exists()) {
			throw new NotFoundException(__('Inválido fazendas pessoa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FazendasPessoa->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
