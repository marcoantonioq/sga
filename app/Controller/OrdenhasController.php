<?php
App::uses('AppController', 'Controller');
/**
 * Ordenhas Controller
 *
 * @property Ordenha $Ordenha
 * @property PaginatorComponent $Paginator
 */
class OrdenhasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Ordenhas');
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
		$this->Ordenha->recursive = 0;
		$this->set('ordenhas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ordenha->exists($id)) {
			throw new NotFoundException(__('Inválido ordenha'));
		}
		$options = array('conditions' => array('Ordenha.' . $this->Ordenha->primaryKey => $id));
		$this->set('ordenha', $this->Ordenha->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ordenha->create();
			if ($this->Ordenha->save($this->request->data)) {
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
		if (!$this->Ordenha->exists($id)) {
			throw new NotFoundException(__('Inválido ordenha'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ordenha->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Ordenha.' . $this->Ordenha->primaryKey => $id));
			$this->request->data = $this->Ordenha->find('first', $options);
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
		$this->Ordenha->id = $id;
		if (!$this->Ordenha->exists()) {
			throw new NotFoundException(__('Inválido ordenha'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ordenha->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
