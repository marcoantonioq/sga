<?php
App::uses('AppController', 'Controller');
/**
 * CentralcustosVendas Controller
 *
 * @property CentralcustosVenda $CentralcustosVenda
 * @property PaginatorComponent $Paginator
 */
class CentralcustosVendasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'CentralcustosVendas');
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
		$this->CentralcustosVenda->recursive = 0;
		$this->set('centralcustosVendas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CentralcustosVenda->exists($id)) {
			throw new NotFoundException(__('Inválido centralcustos venda'));
		}
		$options = array('conditions' => array('CentralcustosVenda.' . $this->CentralcustosVenda->primaryKey => $id));
		$this->set('centralcustosVenda', $this->CentralcustosVenda->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CentralcustosVenda->create();
			if ($this->CentralcustosVenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$centralcustos = $this->CentralcustosVenda->Centralcusto->find('list');
		$vendas = $this->CentralcustosVenda->Venda->find('list');
		$this->set(compact('centralcustos', 'vendas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CentralcustosVenda->exists($id)) {
			throw new NotFoundException(__('Inválido centralcustos venda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CentralcustosVenda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('CentralcustosVenda.' . $this->CentralcustosVenda->primaryKey => $id));
			$this->request->data = $this->CentralcustosVenda->find('first', $options);
		}
		$centralcustos = $this->CentralcustosVenda->Centralcusto->find('list');
		$vendas = $this->CentralcustosVenda->Venda->find('list');
		$this->set(compact('centralcustos', 'vendas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CentralcustosVenda->id = $id;
		if (!$this->CentralcustosVenda->exists()) {
			throw new NotFoundException(__('Inválido centralcustos venda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CentralcustosVenda->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
