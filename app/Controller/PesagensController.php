<?php
App::uses('AppController', 'Controller');
/**
 * Pesagens Controller
 *
 * @property Pesagen $Pesagen
 * @property PaginatorComponent $Paginator
 */
class PesagensController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Pesagens');
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
		$this->Pesagen->recursive = 0;
		$this->set('pesagens', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pesagen->exists($id)) {
			throw new NotFoundException(__('Inválido pesagen'));
		}
		$options = array('conditions' => array('Pesagen.' . $this->Pesagen->primaryKey => $id));
		$this->set('pesagen', $this->Pesagen->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pesagen->create();
			if ($this->Pesagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Pesagen->Bovino->find('list');
		$pastos = $this->Pesagen->Pasto->find('list');
		$this->set(compact('bovinos', 'pastos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Pesagen->exists($id)) {
			throw new NotFoundException(__('Inválido pesagen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pesagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Pesagen.' . $this->Pesagen->primaryKey => $id));
			$this->request->data = $this->Pesagen->find('first', $options);
		}
		$bovinos = $this->Pesagen->Bovino->find('list');
		$pastos = $this->Pesagen->Pasto->find('list');
		$this->set(compact('bovinos', 'pastos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pesagen->id = $id;
		if (!$this->Pesagen->exists()) {
			throw new NotFoundException(__('Inválido pesagen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pesagen->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
