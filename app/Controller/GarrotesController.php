<?php
App::uses('AppController', 'Controller');
/**
 * Garrotes Controller
 *
 * @property Garrote $Garrote
 * @property PaginatorComponent $Paginator
 */
class GarrotesController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Garrotes');
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
		// parent::index();
		$this->Garrote->recursive = 0;
		$this->set('garrotes', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Garrote->exists($id)) {
			throw new NotFoundException(__('Inválido garrote'));
		}
		$options = array('conditions' => array('Garrote.' . $this->Garrote->primaryKey => $id));
		$this->set('garrote', $this->Garrote->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Garrote->create();
			if ($this->Garrote->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Garrote->Bovino->find('list');
		$this->set(compact('bovinos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Garrote->exists($id)) {
			throw new NotFoundException(__('Inválido garrote'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Garrote->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Garrote.' . $this->Garrote->primaryKey => $id));
			$this->request->data = $this->Garrote->find('first', $options);
		}
		$bovinos = $this->Garrote->Bovino->find('list');
		$this->set(compact('bovinos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Garrote->id = $id;
		if (!$this->Garrote->exists()) {
			throw new NotFoundException(__('Inválido garrote'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Garrote->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
