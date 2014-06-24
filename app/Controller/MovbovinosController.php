<?php
App::uses('AppController', 'Controller');
/**
 * Movbovinos Controller
 *
 * @property Movbovino $Movbovino
 * @property PaginatorComponent $Paginator
 */
class MovbovinosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Movbovinos');
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
		$this->Movbovino->recursive = 0;
		$this->set('movbovinos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Movbovino->exists($id)) {
			throw new NotFoundException(__('Inválido movbovino'));
		}
		$options = array('conditions' => array('Movbovino.' . $this->Movbovino->primaryKey => $id));
		$this->set('movbovino', $this->Movbovino->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Movbovino->create();
			if ($this->Movbovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Movbovino->Bovino->find('list');
		$pastos = $this->Movbovino->Pasto->find('list');
		$this->set(compact('bovinos', 'pastos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Movbovino->exists($id)) {
			throw new NotFoundException(__('Inválido movbovino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Movbovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Movbovino.' . $this->Movbovino->primaryKey => $id));
			$this->request->data = $this->Movbovino->find('first', $options);
		}
		$bovinos = $this->Movbovino->Bovino->find('list');
		$pastos = $this->Movbovino->Pasto->find('list');
		$this->set(compact('bovinos', 'pastos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Movbovino->id = $id;
		if (!$this->Movbovino->exists()) {
			throw new NotFoundException(__('Inválido movbovino'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Movbovino->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
