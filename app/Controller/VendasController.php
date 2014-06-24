<?php
App::uses('AppController', 'Controller');
/**
 * Vendas Controller
 *
 * @property Venda $Venda
 * @property PaginatorComponent $Paginator
 */
class VendasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Vendas');
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
		$this->Venda->recursive = 0;
		$this->set('vendas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Inválido venda'));
		}
		$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
		$this->set('venda', $this->Venda->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venda->create();
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$produtos = $this->Venda->Produto->find('list');
		$clientes = $this->Venda->Cliente->find('list');
		$patrimonios = $this->Venda->Patrimonio->find('list');
		$centralcustos = $this->Venda->Centralcusto->find('list');
		$this->set(compact('produtos', 'clientes', 'patrimonios', 'centralcustos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Inválido venda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
			$this->request->data = $this->Venda->find('first', $options);
		}
		$produtos = $this->Venda->Produto->find('list');
		$clientes = $this->Venda->Cliente->find('list');
		$patrimonios = $this->Venda->Patrimonio->find('list');
		$centralcustos = $this->Venda->Centralcusto->find('list');
		$this->set(compact('produtos', 'clientes', 'patrimonios', 'centralcustos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Venda->id = $id;
		if (!$this->Venda->exists()) {
			throw new NotFoundException(__('Inválido venda'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Venda->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
