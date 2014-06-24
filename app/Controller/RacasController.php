<?php
App::uses('AppController', 'Controller');
/**
 * Racas Controller
 *
 * @property Raca $Raca
 * @property PaginatorComponent $Paginator
 */
class RacasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Racas');
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
		$this->Raca->recursive = 0;
		$this->set('racas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Raca->exists($id)) {
			throw new NotFoundException(__('Inválido raca'));
		}
		$options = array('conditions' => array('Raca.' . $this->Raca->primaryKey => $id));
		$this->set('raca', $this->Raca->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Raca->create();
			if ($this->Raca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Raca->Bovino->find('list');
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
		if (!$this->Raca->exists($id)) {
			throw new NotFoundException(__('Inválido raca'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Raca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Raca.' . $this->Raca->primaryKey => $id));
			$this->request->data = $this->Raca->find('first', $options);
		}
		$bovinos = $this->Raca->Bovino->find('list');
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
		$this->Raca->id = $id;
		if (!$this->Raca->exists()) {
			throw new NotFoundException(__('Inválido raca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Raca->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
