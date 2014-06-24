<?php
App::uses('AppController', 'Controller');
/**
 * Meteorologicos Controller
 *
 * @property Meteorologico $Meteorologico
 * @property PaginatorComponent $Paginator
 */
class MeteorologicosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Meteorologicos');
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
		$this->Meteorologico->recursive = 0;
		$this->set('meteorologicos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Meteorologico->exists($id)) {
			throw new NotFoundException(__('Inválido meteorologico'));
		}
		$options = array('conditions' => array('Meteorologico.' . $this->Meteorologico->primaryKey => $id));
		$this->set('meteorologico', $this->Meteorologico->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Meteorologico->create();
			if ($this->Meteorologico->save($this->request->data)) {
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
		if (!$this->Meteorologico->exists($id)) {
			throw new NotFoundException(__('Inválido meteorologico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Meteorologico->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Meteorologico.' . $this->Meteorologico->primaryKey => $id));
			$this->request->data = $this->Meteorologico->find('first', $options);
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
		$this->Meteorologico->id = $id;
		if (!$this->Meteorologico->exists()) {
			throw new NotFoundException(__('Inválido meteorologico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Meteorologico->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
