<?php
App::uses('AppController', 'Controller');
/**
 * AlertsGroups Controller
 *
 * @property AlertsGroup $AlertsGroup
 * @property PaginatorComponent $Paginator
 */
class AlertsGroupsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'AlertsGroups');
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
		$this->AlertsGroup->recursive = 0;
		$this->set('alertsGroups', $this->Paginator->paginate());
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AlertsGroup->exists($id)) {
			throw new NotFoundException(__('Inválido alerts group'));
		}
		$options = array('conditions' => array('AlertsGroup.' . $this->AlertsGroup->primaryKey => $id));
		$this->set('alertsGroup', $this->AlertsGroup->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AlertsGroup->create();
			if ($this->AlertsGroup->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$alerts = $this->AlertsGroup->Alert->find('list');
		$groups = $this->AlertsGroup->Group->find('list');
		$this->set(compact('alerts', 'groups'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AlertsGroup->exists($id)) {
			throw new NotFoundException(__('Inválido alerts group'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AlertsGroup->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('AlertsGroup.' . $this->AlertsGroup->primaryKey => $id));
			$this->request->data = $this->AlertsGroup->find('first', $options);
		}
		$alerts = $this->AlertsGroup->Alert->find('list');
		$groups = $this->AlertsGroup->Group->find('list');
		$this->set(compact('alerts', 'groups'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AlertsGroup->id = $id;
		if (!$this->AlertsGroup->exists()) {
			throw new NotFoundException(__('Inválido alerts group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AlertsGroup->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
