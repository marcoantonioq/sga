<?php
App::uses('AppController', 'Controller');
/**
 * Centralcustos Controller
 *
 * @property Centralcusto $Centralcusto
 * @property PaginatorComponent $Paginator
 */
class CentralcustosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Centralcustos');
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
		$this->Centralcusto->recursive = 0;
		$this->set('centralcustos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Centralcusto->exists($id)) {
			throw new NotFoundException(__('Inválido centralcusto'));
		}
		$options = array('conditions' => array('Centralcusto.' . $this->Centralcusto->primaryKey => $id));
		$centralcusto = $this->Centralcusto->find('first', $options);
		$fornecimento = $this->Centralcusto->Fornecimento->find('all', array(
			'conditions'=>array(
				'Centralcusto.id'=>$id
			)
		));
		$this->set(compact('centralcusto', 'fornecimento'));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Centralcusto->create();
			if ($this->Centralcusto->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$compras = $this->Centralcusto->Compra->find('list');
		$vendas = $this->Centralcusto->Venda->find('list');
		$this->set(compact('compras', 'vendas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Centralcusto->exists($id)) {
			throw new NotFoundException(__('Inválido centralcusto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Centralcusto->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Centralcusto.' . $this->Centralcusto->primaryKey => $id));
			$this->request->data = $this->Centralcusto->find('first', $options);
		}
		$compras = $this->Centralcusto->Compra->find('list');
		$vendas = $this->Centralcusto->Venda->find('list');
		$this->set(compact('compras', 'vendas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Centralcusto->id = $id;
		if (!$this->Centralcusto->exists()) {
			throw new NotFoundException(__('Inválido centralcusto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Centralcusto->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
