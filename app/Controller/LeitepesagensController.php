<?php
App::uses('AppController', 'Controller');
/**
 * Leitepesagens Controller
 *
 * @property Leitepesagen $Leitepesagen
 * @property PaginatorComponent $Paginator
 */
class LeitepesagensController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Leitepesagens');
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
		$this->Leitepesagen->recursive = 0;
		$this->set('leitepesagens', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Leitepesagen->exists($id)) {
			throw new NotFoundException(__('Inválido leitepesagen'));
		}
		$options = array('conditions' => array('Leitepesagen.' . $this->Leitepesagen->primaryKey => $id));
		$this->set('leitepesagen', $this->Leitepesagen->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Leitepesagen->create();
			if ($this->Leitepesagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Leitepesagen->Bovino->find('list');
		$ordenhas = $this->Leitepesagen->Ordenha->find('list');
		$this->set(compact('bovinos', 'ordenhas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Leitepesagen->exists($id)) {
			throw new NotFoundException(__('Inválido leitepesagen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Leitepesagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Leitepesagen.' . $this->Leitepesagen->primaryKey => $id));
			$this->request->data = $this->Leitepesagen->find('first', $options);
		}
		$bovinos = $this->Leitepesagen->Bovino->find('list');
		$ordenhas = $this->Leitepesagen->Ordenha->find('list');
		$this->set(compact('bovinos', 'ordenhas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Leitepesagen->id = $id;
		if (!$this->Leitepesagen->exists()) {
			throw new NotFoundException(__('Inválido leitepesagen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Leitepesagen->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
