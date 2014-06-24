<?php
App::uses('AppController', 'Controller');
/**
 * EventosDoencas Controller
 *
 * @property EventosDoenca $EventosDoenca
 * @property PaginatorComponent $Paginator
 */
class EventosDoencasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'EventosDoencas');
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
		$this->EventosDoenca->recursive = 0;
		$this->set('eventosDoencas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventosDoenca->exists($id)) {
			throw new NotFoundException(__('Inválido eventos doenca'));
		}
		$options = array('conditions' => array('EventosDoenca.' . $this->EventosDoenca->primaryKey => $id));
		$this->set('eventosDoenca', $this->EventosDoenca->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventosDoenca->create();
			if ($this->EventosDoenca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$eventos = $this->EventosDoenca->Evento->find('list');
		$doencas = $this->EventosDoenca->Doenca->find('list');
		$this->set(compact('eventos', 'doencas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventosDoenca->exists($id)) {
			throw new NotFoundException(__('Inválido eventos doenca'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventosDoenca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('EventosDoenca.' . $this->EventosDoenca->primaryKey => $id));
			$this->request->data = $this->EventosDoenca->find('first', $options);
		}
		$eventos = $this->EventosDoenca->Evento->find('list');
		$doencas = $this->EventosDoenca->Doenca->find('list');
		$this->set(compact('eventos', 'doencas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventosDoenca->id = $id;
		if (!$this->EventosDoenca->exists()) {
			throw new NotFoundException(__('Inválido eventos doenca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EventosDoenca->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
