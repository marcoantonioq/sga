<?php
App::uses('AppController', 'Controller');
/**
 * Menssagens Controller
 *
 * @property Menssagen $Menssagen
 * @property PaginatorComponent $Paginator
 */
class MenssagensController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Menssagens');
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
		$this->Menssagen->recursive = 0;
		$this->set('menssagens', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Menssagen->exists($id)) {
			throw new NotFoundException(__('Inválido menssagen'));
		}
		$options = array('conditions' => array('Menssagen.' . $this->Menssagen->primaryKey => $id));
		$this->set('menssagen', $this->Menssagen->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Menssagen->create();
			if ($this->Menssagen->save($this->request->data)) {
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
		if (!$this->Menssagen->exists($id)) {
			throw new NotFoundException(__('Inválido menssagen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menssagen->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Menssagen.' . $this->Menssagen->primaryKey => $id));
			$this->request->data = $this->Menssagen->find('first', $options);
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
		$this->Menssagen->id = $id;
		if (!$this->Menssagen->exists()) {
			throw new NotFoundException(__('Inválido menssagen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Menssagen->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
