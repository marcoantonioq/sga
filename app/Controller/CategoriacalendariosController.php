<?php
App::uses('AppController', 'Controller');
/**
 * Categoriacalendarios Controller
 *
 * @property Categoriacalendario $Categoriacalendario
 * @property PaginatorComponent $Paginator
 */
class CategoriacalendariosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Categoriacalendarios');
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
		$this->Categoriacalendario->recursive = 0;
		$this->set('categoriacalendarios', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoriacalendario->exists($id)) {
			throw new NotFoundException(__('Inválido categoriacalendario'));
		}
		$options = array('conditions' => array('Categoriacalendario.' . $this->Categoriacalendario->primaryKey => $id));
		$this->set('categoriacalendario', $this->Categoriacalendario->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriacalendario->create();
			if ($this->Categoriacalendario->save($this->request->data)) {
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
		if (!$this->Categoriacalendario->exists($id)) {
			throw new NotFoundException(__('Inválido categoriacalendario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoriacalendario->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Categoriacalendario.' . $this->Categoriacalendario->primaryKey => $id));
			$this->request->data = $this->Categoriacalendario->find('first', $options);
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
		$this->Categoriacalendario->id = $id;
		if (!$this->Categoriacalendario->exists()) {
			throw new NotFoundException(__('Inválido categoriacalendario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoriacalendario->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
