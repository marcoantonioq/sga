<?php
App::uses('AppController', 'Controller');
/**
 * Calendarios Controller
 *
 * @property Calendario $Calendario
 * @property PaginatorComponent $Paginator
 */
class CalendariosController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Calendarios');
		$this->Auth->allow('count');
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
		$this->layout="calendario";
		$this->Calendario->recursive = 0;
		$this->set('calendarios', $this->Paginator->paginate());
	}

	public function count() {
		$this->Calendario->recursive = 0;
		// echo date('Y-m-d H:m:i');
		$datas = $this->Calendario->find('count',array(
			'Calendario.inicio'=>date('y-m-d')
		));
		// pr($datas); exit;
		return $datas;
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Calendario->exists($id)) {
			throw new NotFoundException(__('Inválido calendario'));
		}
		$options = array('conditions' => array('Calendario.' . $this->Calendario->primaryKey => $id));
		$this->set('calendario', $this->Calendario->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Calendario->create();
			if ($this->Calendario->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$fazendas = $this->Calendario->Fazenda->find('list');
		$categoriacalendarios = $this->Calendario->Categoriacalendario->find('list');
		$this->set(compact('fazendas', 'categoriacalendarios'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Calendario->exists($id)) {
			throw new NotFoundException(__('Inválido calendario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Calendario->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Calendario.' . $this->Calendario->primaryKey => $id));
			$this->request->data = $this->Calendario->find('first', $options);
		}
		$fazendas = $this->Calendario->Fazenda->find('list');
		$categoriacalendarios = $this->Calendario->Categoriacalendario->find('list');
		$this->set(compact('fazendas', 'categoriacalendarios'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Calendario->id = $id;
		if (!$this->Calendario->exists()) {
			throw new NotFoundException(__('Inválido calendario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Calendario->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
