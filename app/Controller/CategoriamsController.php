<?php
App::uses('AppController', 'Controller');
/**
 * Categoriams Controller
 *
 * @property Categoriam $Categoriam
 * @property PaginatorComponent $Paginator
 */
class CategoriamsController extends AppController {

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
		$this->Categoriam->recursive = 0;
		$this->set('categoriams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoriam->exists($id)) {
			throw new NotFoundException(__('Inválido categoriam'));
		}
		$options = array('conditions' => array('Categoriam.' . $this->Categoriam->primaryKey => $id));
		$this->set('categoriam', $this->Categoriam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriam->create();
			if ($this->Categoriam->save($this->request->data)) {
				$this->Session->setFlash(__('O categoriam foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O categoriam não pôde ser salvo. Por favor, tente novamente.'), 'error');
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
		if (!$this->Categoriam->exists($id)) {
			throw new NotFoundException(__('Inválido categoriam'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoriam->save($this->request->data)) {
				$this->Session->setFlash(__('O categoriam foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O categoriam não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Categoriam.' . $this->Categoriam->primaryKey => $id));
			$this->request->data = $this->Categoriam->find('first', $options);
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
		$this->Categoriam->id = $id;
		if (!$this->Categoriam->exists()) {
			throw new NotFoundException(__('Inválido categoriam'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoriam->delete()) {
	
			$this->Session->setFlash(__('O categoriam foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('O categoriam não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
