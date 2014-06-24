<?php
App::uses('AppController', 'Controller');
/**
 * Categoriaseventos Controller
 *
 * @property Categoriasevento $Categoriasevento
 * @property PaginatorComponent $Paginator
 */
class CategoriaseventosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Categoriaseventos');
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
		$this->Categoriasevento->recursive = 0;
		$this->set('categoriaseventos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoriasevento->exists($id)) {
			throw new NotFoundException(__('Inválido categoriasevento'));
		}
		$options = array('conditions' => array('Categoriasevento.' . $this->Categoriasevento->primaryKey => $id));
		$this->set('categoriasevento', $this->Categoriasevento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriasevento->create();
			if ($this->Categoriasevento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$groups = $this->Categoriasevento->Group->find('list');
		$this->set(compact('groups'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Categoriasevento->exists($id)) {
			throw new NotFoundException(__('Inválido categoriasevento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoriasevento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Categoriasevento.' . $this->Categoriasevento->primaryKey => $id));
			$this->request->data = $this->Categoriasevento->find('first', $options);
		}
		$groups = $this->Categoriasevento->Group->find('list');
		$this->set(compact('groups'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Categoriasevento->id = $id;
		if (!$this->Categoriasevento->exists()) {
			throw new NotFoundException(__('Inválido categoriasevento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoriasevento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
