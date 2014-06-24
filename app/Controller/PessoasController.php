<?php
App::uses('AppController', 'Controller');
/**
 * Pessoas Controller
 *
 * @property Pessoa $Pessoa
 * @property PaginatorComponent $Paginator
 */
class PessoasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Pessoas');
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
		$this->Pessoa->recursive = 0;
		$this->set('pessoas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pessoa->exists($id)) {
			throw new NotFoundException(__('Inválido pessoa'));
		}
		$options = array('conditions' => array('Pessoa.' . $this->Pessoa->primaryKey => $id));
		$this->set('pessoa', $this->Pessoa->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pessoa->create();
			if ($this->Pessoa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$sexos = $this->Pessoa->Sexo->find('list');
		$parentPessoas = $this->Pessoa->ParentPessoa->find('list');
		$fazendas = $this->Pessoa->Fazenda->find('list');
		$cargos = $this->Pessoa->Cargo->find('list');
		$this->set(compact('sexos', 'parentPessoas', 'fazendas', 'cargos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pessoa->exists($id)) {
			throw new NotFoundException(__('Inválido pessoa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pessoa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Pessoa.' . $this->Pessoa->primaryKey => $id));
			$this->request->data = $this->Pessoa->find('first', $options);
		}
		$sexos = $this->Pessoa->Sexo->find('list');
		$parentPessoas = $this->Pessoa->ParentPessoa->find('list');
		$fazendas = $this->Pessoa->Fazenda->find('list');
		$cargos = $this->Pessoa->Cargo->find('list');
		$this->set(compact('sexos', 'parentPessoas', 'fazendas', 'cargos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pessoa->id = $id;
		if (!$this->Pessoa->exists()) {
			throw new NotFoundException(__('Inválido pessoa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pessoa->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
