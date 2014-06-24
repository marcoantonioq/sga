<?php
App::uses('AppController', 'Controller');
/**
 * Sexos Controller
 *
 * @property Sexo $Sexo
 * @property PaginatorComponent $Paginator
 */
class SexosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Sexos');
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
		$this->Sexo->recursive = 0;
		$this->set('sexos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sexo->exists($id)) {
			throw new NotFoundException(__('Inválido sexo'));
		}
		$options = array('conditions' => array('Sexo.' . $this->Sexo->primaryKey => $id));
		$this->set('sexo', $this->Sexo->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sexo->create();
			if ($this->Sexo->save($this->request->data)) {
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
		if (!$this->Sexo->exists($id)) {
			throw new NotFoundException(__('Inválido sexo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sexo->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Sexo.' . $this->Sexo->primaryKey => $id));
			$this->request->data = $this->Sexo->find('first', $options);
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
		$this->Sexo->id = $id;
		if (!$this->Sexo->exists()) {
			throw new NotFoundException(__('Inválido sexo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sexo->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
