<?php
App::uses('AppController', 'Controller');
/**
 * Dieta Controller
 *
 * @property Dietum $Dietum
 * @property PaginatorComponent $Paginator
 */
class DietaController extends AppController {

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
		$this->Dietum->recursive = 0;
		$this->set('dieta', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dietum->exists($id)) {
			throw new NotFoundException(__('Inválido dietum'));
		}
		$options = array('conditions' => array('Dietum.' . $this->Dietum->primaryKey => $id));
		$this->set('dietum', $this->Dietum->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dietum->create();
			if ($this->Dietum->save($this->request->data)) {
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
		if (!$this->Dietum->exists($id)) {
			throw new NotFoundException(__('Inválido dietum'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dietum->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Dietum.' . $this->Dietum->primaryKey => $id));
			$this->request->data = $this->Dietum->find('first', $options);
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
		$this->Dietum->id = $id;
		if (!$this->Dietum->exists()) {
			throw new NotFoundException(__('Inválido dietum'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dietum->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
