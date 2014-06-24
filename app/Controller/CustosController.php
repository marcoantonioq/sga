<?php
App::uses('AppController', 'Controller');
/**
 * Custos Controller
 *
 * @property Custo $Custo
 * @property PaginatorComponent $Paginator
 */
class CustosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Custos');
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
		$this->Custo->recursive = 0;
		$this->set('custos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Custo->exists($id)) {
			throw new NotFoundException(__('Inválido custo'));
		}
		$options = array('conditions' => array('Custo.' . $this->Custo->primaryKey => $id));
		$this->set('custo', $this->Custo->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Custo->create();
			if ($this->Custo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$centralcustos = $this->Custo->Centralcusto->find('list', array(
			'conditions'=>array(
				'Centralcusto.status'=>0
			)
		));
		$this->set(compact('centralcustos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Custo->exists($id)) {
			throw new NotFoundException(__('Inválido custo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Custo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Custo.' . $this->Custo->primaryKey => $id));
			$this->request->data = $this->Custo->find('first', $options);
		}
		$centralcustos = $this->Custo->Centralcusto->find('list', array(
			'conditions'=>array(
				'Centralcusto.status'=>0
			)
		));
		$this->set(compact('centralcustos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Custo->id = $id;
		if (!$this->Custo->exists()) {
			throw new NotFoundException(__('Inválido custo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Custo->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
