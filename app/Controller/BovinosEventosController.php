<?php
App::uses('AppController', 'Controller');
/**
 * BovinosEventos Controller
 *
 * @property BovinosEvento $BovinosEvento
 * @property PaginatorComponent $Paginator
 */
class BovinosEventosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'BovinosEventos');
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
		$this->BovinosEvento->recursive = 0;
		$this->set('bovinosEventos', $this->Paginator->paginate());
		parent::index();
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BovinosEvento->exists($id)) {
			throw new NotFoundException(__('Inválido bovinos evento'));
		}
		$options = array('conditions' => array('BovinosEvento.' . $this->BovinosEvento->primaryKey => $id));
		$this->set('bovinosEvento', $this->BovinosEvento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BovinosEvento->create();
			if ($this->BovinosEvento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->BovinosEvento->Bovino->find('list');
		$eventos = $this->BovinosEvento->Evento->find('list');
		$this->set(compact('bovinos', 'eventos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->BovinosEvento->exists($id)) {
			throw new NotFoundException(__('Inválido bovinos evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BovinosEvento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('BovinosEvento.' . $this->BovinosEvento->primaryKey => $id));
			$this->request->data = $this->BovinosEvento->find('first', $options);
		}
		$bovinos = $this->BovinosEvento->Bovino->find('list');
		$eventos = $this->BovinosEvento->Evento->find('list');
		$this->set(compact('bovinos', 'eventos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->BovinosEvento->id = $id;
		if (!$this->BovinosEvento->exists()) {
			throw new NotFoundException(__('Inválido bovinos evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->BovinosEvento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
