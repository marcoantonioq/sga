<?php
App::uses('AppController', 'Controller');
/**
 * Recebimentos Controller
 *
 * @property Recebimento $Recebimento
 * @property PaginatorComponent $Paginator
 */
class RecebimentosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Recebimentos');
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
		$this->Recebimento->recursive = 0;
		$this->set('recebimentos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Recebimento->exists($id)) {
			throw new NotFoundException(__('Inválido recebimento'));
		}
		$options = array('conditions' => array('Recebimento.' . $this->Recebimento->primaryKey => $id));
		$this->set('recebimento', $this->Recebimento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Recebimento->create();
			if ($this->Recebimento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$quotes = $this->Recebimento->Quote->find('list');
		$this->set(compact('quotes'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Recebimento->exists($id)) {
			throw new NotFoundException(__('Inválido recebimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Recebimento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Recebimento.' . $this->Recebimento->primaryKey => $id));
			$this->request->data = $this->Recebimento->find('first', $options);
		}
		$quotes = $this->Recebimento->Quote->find('list');
		$this->set(compact('quotes'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Recebimento->id = $id;
		if (!$this->Recebimento->exists()) {
			throw new NotFoundException(__('Inválido recebimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Recebimento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
