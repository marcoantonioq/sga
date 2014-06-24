<?php
App::uses('AppController', 'Controller');
/**
 * Categoriabs Controller
 *
 * @property Categoriab $Categoriab
 * @property PaginatorComponent $Paginator
 */
class CategoriabsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Categoria bovinos');
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
		$this->Categoriab->recursive = 0;
		$this->set('categoriabs', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoriab->exists($id)) {
			throw new NotFoundException(__('Inválido categoriab'));
		}
		$options = array('conditions' => array('Categoriab.' . $this->Categoriab->primaryKey => $id));
		$this->set('categoriab', $this->Categoriab->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriab->create();
			if ($this->Categoriab->save($this->request->data)) {
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
		if (!$this->Categoriab->exists($id)) {
			throw new NotFoundException(__('Inválido categoriab'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoriab->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Categoriab.' . $this->Categoriab->primaryKey => $id));
			$this->request->data = $this->Categoriab->find('first', $options);
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
		$this->Categoriab->id = $id;
		if (!$this->Categoriab->exists()) {
			throw new NotFoundException(__('Inválido categoriab'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoriab->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
