<?php
App::uses('AppController', 'Controller');
/**
 * Patrimonios Controller
 *
 * @property Patrimonio $Patrimonio
 * @property PaginatorComponent $Paginator
 */
class PatrimoniosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Patrimonios');
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
		$this->Patrimonio->recursive = 0;
		$this->set('patrimonios', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patrimonio->exists($id)) {
			throw new NotFoundException(__('Inválido patrimonio'));
		}
		$options = array('conditions' => array('Patrimonio.' . $this->Patrimonio->primaryKey => $id));
		$this->set('patrimonio', $this->Patrimonio->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patrimonio->create();
			if ($this->Patrimonio->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fabricantes = $this->Patrimonio->Fabricante->find('list');
		$fazendas = $this->Patrimonio->Fazenda->find('list');
		$categoriaps = $this->Patrimonio->Categoriap->find('list');
		$compras = $this->Patrimonio->Compra->find('list');
		$this->set(compact('fabricantes', 'fazendas', 'categoriaps', 'compras'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patrimonio->exists($id)) {
			throw new NotFoundException(__('Inválido patrimonio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Patrimonio->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Patrimonio.' . $this->Patrimonio->primaryKey => $id));
			$this->request->data = $this->Patrimonio->find('first', $options);
		}
		$fabricantes = $this->Patrimonio->Fabricante->find('list');
		$fazendas = $this->Patrimonio->Fazenda->find('list');
		$categoriaps = $this->Patrimonio->Categoriap->find('list');
		$compras = $this->Patrimonio->Compra->find('list');
		$this->set(compact('fabricantes', 'fazendas', 'categoriaps', 'compras'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Patrimonio->id = $id;
		if (!$this->Patrimonio->exists()) {
			throw new NotFoundException(__('Inválido patrimonio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Patrimonio->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
