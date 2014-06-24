<?php
App::uses('AppController', 'Controller');
/**
 * Sexobovinos Controller
 *
 * @property Sexobovino $Sexobovino
 * @property PaginatorComponent $Paginator
 */
class SexobovinosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Sexobovinos');
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
		$this->Sexobovino->recursive = 0;
		$this->set('sexobovinos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sexobovino->exists($id)) {
			throw new NotFoundException(__('Inválido sexobovino'));
		}
		$options = array('conditions' => array('Sexobovino.' . $this->Sexobovino->primaryKey => $id));
		$this->set('sexobovino', $this->Sexobovino->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sexobovino->create();
			if ($this->Sexobovino->save($this->request->data)) {
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
		if (!$this->Sexobovino->exists($id)) {
			throw new NotFoundException(__('Inválido sexobovino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sexobovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Sexobovino.' . $this->Sexobovino->primaryKey => $id));
			$this->request->data = $this->Sexobovino->find('first', $options);
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
		$this->Sexobovino->id = $id;
		if (!$this->Sexobovino->exists()) {
			throw new NotFoundException(__('Inválido sexobovino'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sexobovino->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
