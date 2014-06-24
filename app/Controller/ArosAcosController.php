<?php
App::uses('AppController', 'Controller');
/**
 * ArosAcos Controller
 *
 * @property ArosAco $ArosAco
 * @property PaginatorComponent $Paginator
 */
class ArosAcosController extends AppController {

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
		$this->ArosAco->recursive = 0;
		$this->set('arosAcos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Inválido aros aco'));
		}
		$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
		$this->set('arosAco', $this->ArosAco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArosAco->create();
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list');
		$this->set(compact('aros', 'acos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ArosAco->exists($id)) {
			throw new NotFoundException(__('Inválido aros aco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArosAco->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('ArosAco.' . $this->ArosAco->primaryKey => $id));
			$this->request->data = $this->ArosAco->find('first', $options);
		}
		$aros = $this->ArosAco->Aro->find('list');
		$acos = $this->ArosAco->Aco->find('list');
		$this->set(compact('aros', 'acos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ArosAco->id = $id;
		if (!$this->ArosAco->exists()) {
			throw new NotFoundException(__('Inválido aros aco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ArosAco->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
