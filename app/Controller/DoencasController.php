<?php
App::uses('AppController', 'Controller');
/**
 * Doencas Controller
 *
 * @property Doenca $Doenca
 * @property PaginatorComponent $Paginator
 */
class DoencasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Doencas');
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
		$this->Doenca->recursive = 0;
		$this->set('doencas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Doenca->exists($id)) {
			throw new NotFoundException(__('Inválido doenca'));
		}
		$options = array('conditions' => array('Doenca.' . $this->Doenca->primaryKey => $id));
		$this->set('doenca', $this->Doenca->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doenca->create();
			if ($this->Doenca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$eventos = $this->Doenca->Evento->find('list');
		$this->set(compact('eventos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Doenca->exists($id)) {
			throw new NotFoundException(__('Inválido doenca'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doenca->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Doenca.' . $this->Doenca->primaryKey => $id));
			$this->request->data = $this->Doenca->find('first', $options);
		}
		$eventos = $this->Doenca->Evento->find('list');
		$this->set(compact('eventos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Doenca->id = $id;
		if (!$this->Doenca->exists()) {
			throw new NotFoundException(__('Inválido doenca'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Doenca->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
