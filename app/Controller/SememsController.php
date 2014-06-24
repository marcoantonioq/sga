<?php
App::uses('AppController', 'Controller');
/**
 * Semems Controller
 *
 * @property Semem $Semem
 * @property PaginatorComponent $Paginator
 */
class SememsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Semems');
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
		$this->Semem->recursive = 0;
		$this->set('semems', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Semem->exists($id)) {
			throw new NotFoundException(__('Inválido semem'));
		}
		$options = array('conditions' => array('Semem.' . $this->Semem->primaryKey => $id));
		$this->set('semem', $this->Semem->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Semem->create();
			if ($this->Semem->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Semem->exists($id)) {
			throw new NotFoundException(__('Inválido semem'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Semem->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Semem.' . $this->Semem->primaryKey => $id));
			$this->request->data = $this->Semem->find('first', $options);
		}
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Semem->id = $id;
		if (!$this->Semem->exists()) {
			throw new NotFoundException(__('Inválido semem'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Semem->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
