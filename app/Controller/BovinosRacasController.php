<?php
App::uses('AppController', 'Controller');
/**
 * BovinosRacas Controller
 *
 * @property BovinosRaca $BovinosRaca
 * @property PaginatorComponent $Paginator
 */
class BovinosRacasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'BovinosRacas');
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
		$this->BovinosRaca->recursive = 0;
		$this->set('bovinosRacas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BovinosRaca->exists($id)) {
			throw new NotFoundException(__('Inválido bovinos raca'));
		}
		$options = array('conditions' => array('BovinosRaca.' . $this->BovinosRaca->primaryKey => $id));
		$this->set('bovinosRaca', $this->BovinosRaca->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BovinosRaca->create();
			if ($this->BovinosRaca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->BovinosRaca->Bovino->find('list');
		$racas = $this->BovinosRaca->Raca->find('list');
		$this->set(compact('bovinos', 'racas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BovinosRaca->exists($id)) {
			throw new NotFoundException(__('Inválido bovinos raca'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BovinosRaca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('BovinosRaca.' . $this->BovinosRaca->primaryKey => $id));
			$this->request->data = $this->BovinosRaca->find('first', $options);
		}
		$bovinos = $this->BovinosRaca->Bovino->find('list');
		$racas = $this->BovinosRaca->Raca->find('list');
		$this->set(compact('bovinos', 'racas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BovinosRaca->id = $id;
		if (!$this->BovinosRaca->exists()) {
			throw new NotFoundException(__('Inválido bovinos raca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BovinosRaca->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
