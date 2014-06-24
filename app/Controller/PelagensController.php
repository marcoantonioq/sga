<?php
App::uses('AppController', 'Controller');
/**
 * Pelagens Controller
 *
 * @property Pelagen $Pelagen
 * @property PaginatorComponent $Paginator
 */
class PelagensController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Pelagens');
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
		$this->Pelagen->recursive = 0;
		$this->set('pelagens', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pelagen->exists($id)) {
			throw new NotFoundException(__('Inválido pelagen'));
		}
		$options = array('conditions' => array('Pelagen.' . $this->Pelagen->primaryKey => $id));
		$this->set('pelagen', $this->Pelagen->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pelagen->create();
			if ($this->Pelagen->save($this->request->data)) {
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
		if (!$this->Pelagen->exists($id)) {
			throw new NotFoundException(__('Inválido pelagen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pelagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Pelagen.' . $this->Pelagen->primaryKey => $id));
			$this->request->data = $this->Pelagen->find('first', $options);
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
		$this->Pelagen->id = $id;
		if (!$this->Pelagen->exists()) {
			throw new NotFoundException(__('Inválido pelagen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pelagen->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
