<?php
App::uses('AppController', 'Controller');
/**
 * Taxas Controller
 *
 * @property Taxa $Taxa
 * @property PaginatorComponent $Paginator
 */
class TaxasController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Taxas');
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
		$this->Taxa->recursive = 0;
		$this->set('taxas', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Taxa->exists($id)) {
			throw new NotFoundException(__('Inválido taxa'));
		}
		$options = array('conditions' => array('Taxa.' . $this->Taxa->primaryKey => $id));
		$this->set('taxa', $this->Taxa->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Taxa->create();
			if ($this->Taxa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$quotes = $this->Taxa->Quote->find('list');
		$this->set(compact('quotes'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Taxa->exists($id)) {
			throw new NotFoundException(__('Inválido taxa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Taxa->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Taxa.' . $this->Taxa->primaryKey => $id));
			$this->request->data = $this->Taxa->find('first', $options);
		}
		$quotes = $this->Taxa->Quote->find('list');
		$this->set(compact('quotes'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Taxa->id = $id;
		if (!$this->Taxa->exists()) {
			throw new NotFoundException(__('Inválido taxa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Taxa->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
