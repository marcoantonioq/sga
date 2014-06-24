<?php
App::uses('AppController', 'Controller');
/**
 * CentralcustosCompras Controller
 *
 * @property CentralcustosCompra $CentralcustosCompra
 * @property PaginatorComponent $Paginator
 */
class CentralcustosComprasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'CentralcustosCompras');
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
		$this->CentralcustosCompra->recursive = 0;
		$this->set('centralcustosCompras', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CentralcustosCompra->exists($id)) {
			throw new NotFoundException(__('Inválido centralcustos compra'));
		}
		$options = array('conditions' => array('CentralcustosCompra.' . $this->CentralcustosCompra->primaryKey => $id));
		$this->set('centralcustosCompra', $this->CentralcustosCompra->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CentralcustosCompra->create();
			if ($this->CentralcustosCompra->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$centralcustos = $this->CentralcustosCompra->Centralcusto->find('list');
		$compras = $this->CentralcustosCompra->Compra->find('list');
		$this->set(compact('centralcustos', 'compras'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CentralcustosCompra->exists($id)) {
			throw new NotFoundException(__('Inválido centralcustos compra'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CentralcustosCompra->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('CentralcustosCompra.' . $this->CentralcustosCompra->primaryKey => $id));
			$this->request->data = $this->CentralcustosCompra->find('first', $options);
		}
		$centralcustos = $this->CentralcustosCompra->Centralcusto->find('list');
		$compras = $this->CentralcustosCompra->Compra->find('list');
		$this->set(compact('centralcustos', 'compras'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CentralcustosCompra->id = $id;
		if (!$this->CentralcustosCompra->exists()) {
			throw new NotFoundException(__('Inválido centralcustos compra'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CentralcustosCompra->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
