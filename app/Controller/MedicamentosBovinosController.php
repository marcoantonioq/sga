<?php
App::uses('AppController', 'Controller');
/**
 * MedicamentosBovinos Controller
 *
 * @property MedicamentosBovino $MedicamentosBovino
 * @property PaginatorComponent $Paginator
 */
class MedicamentosBovinosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'MedicamentosBovinos');
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
		$this->MedicamentosBovino->recursive = 0;
		$this->set('medicamentosBovinos', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MedicamentosBovino->exists($id)) {
			throw new NotFoundException(__('Inválido medicamentos bovino'));
		}
		$options = array('conditions' => array('MedicamentosBovino.' . $this->MedicamentosBovino->primaryKey => $id));
		$this->set('medicamentosBovino', $this->MedicamentosBovino->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MedicamentosBovino->create();
			if ($this->MedicamentosBovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$medicamentos = $this->MedicamentosBovino->Medicamento->find('list');
		$bovinos = $this->MedicamentosBovino->Bovino->find('list');
		$this->set(compact('medicamentos', 'bovinos'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MedicamentosBovino->exists($id)) {
			throw new NotFoundException(__('Inválido medicamentos bovino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MedicamentosBovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('MedicamentosBovino.' . $this->MedicamentosBovino->primaryKey => $id));
			$this->request->data = $this->MedicamentosBovino->find('first', $options);
		}
		$medicamentos = $this->MedicamentosBovino->Medicamento->find('list');
		$bovinos = $this->MedicamentosBovino->Bovino->find('list');
		$this->set(compact('medicamentos', 'bovinos'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MedicamentosBovino->id = $id;
		if (!$this->MedicamentosBovino->exists()) {
			throw new NotFoundException(__('Inválido medicamentos bovino'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MedicamentosBovino->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
