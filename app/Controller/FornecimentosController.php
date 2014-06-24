<?php
App::uses('AppController', 'Controller');
/**
 * Fornecimentos Controller
 *
 * @property Fornecimento $Fornecimento
 * @property PaginatorComponent $Paginator
 */
class FornecimentosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Fornecimentos');
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
		$this->Fornecimento->recursive = 0;
		$this->set('fornecimentos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fornecimento->exists($id)) {
			throw new NotFoundException(__('Inválido fornecimento'));
		}
		$options = array('conditions' => array('Fornecimento.' . $this->Fornecimento->primaryKey => $id));
		$this->set('fornecimento', $this->Fornecimento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fornecimento->create();
			if ($this->Fornecimento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$centralcustos = $this->Fornecimento->Centralcusto->find('list', array(
			'conditions'=>array(
				'Centralcusto.status'=>0
			)
		));
		$retiros = $this->Fornecimento->Retiro->find('list');
		$this->set(compact('centralcustos', 'retiros'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Fornecimento->exists($id)) {
			throw new NotFoundException(__('Inválido fornecimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fornecimento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Fornecimento.' . $this->Fornecimento->primaryKey => $id));
			$this->request->data = $this->Fornecimento->find('first', $options);
		}
		$centralcustos = $this->Fornecimento->Centralcusto->find('list', array(
			'conditions'=>array(
				'Centralcusto.status'=>0
			)
		));
		$retiros = $this->Fornecimento->Retiro->find('list');
		$this->set(compact('centralcustos', 'retiros'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Fornecimento->id = $id;
		if (!$this->Fornecimento->exists()) {
			throw new NotFoundException(__('Inválido fornecimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Fornecimento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
