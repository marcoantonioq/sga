<?php
App::uses('AppController', 'Controller');
/**
 * Categoriaps Controller
 *
 * @property Categoriap $Categoriap
 * @property PaginatorComponent $Paginator
 */
class CategoriapsController extends AppController {

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
		$this->Categoriap->recursive = 0;
		$this->set('categoriaps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Categoriap->exists($id)) {
			throw new NotFoundException(__('Inválido categoriap'));
		}
		$options = array('conditions' => array('Categoriap.' . $this->Categoriap->primaryKey => $id));
		$this->set('categoriap', $this->Categoriap->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoriap->create();
			if ($this->Categoriap->save($this->request->data)) {
				$this->Session->setFlash(__('O categoriap foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O categoriap não pôde ser salvo. Por favor, tente novamente.'), 'error');
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
		if (!$this->Categoriap->exists($id)) {
			throw new NotFoundException(__('Inválido categoriap'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoriap->save($this->request->data)) {
				$this->Session->setFlash(__('O categoriap foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O categoriap não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Categoriap.' . $this->Categoriap->primaryKey => $id));
			$this->request->data = $this->Categoriap->find('first', $options);
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
		$this->Categoriap->id = $id;
		if (!$this->Categoriap->exists()) {
			throw new NotFoundException(__('Inválido categoriap'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Categoriap->delete()) {
	
			$this->Session->setFlash(__('O categoriap foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('O categoriap não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
