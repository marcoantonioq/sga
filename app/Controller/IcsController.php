<?php
App::uses('AppController', 'Controller');
/**
 * Ics Controller
 *
 * @property Ic $Ic
 * @property PaginatorComponent $Paginator
 */
class IcsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Ics');
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
	public function index($var1 = null) {
		parent::index();
		$options = array();
		if( isset($var1) ){
			switch ($var1) {
				case 'partos':
					$options['conditions']['Ic.status'] = 'Parto';
					break;
				case 'ics':
					$options['conditions']['Ic.status'] = 'Inseminação';
				default:
					break;
			}
		}
		$this->Ic->recursive = 0;
		$this->Paginator->settings += $options;
		$ics = $this->Paginator->paginate();
		$this->set(compact('ics'));
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ic->exists($id)) {
			throw new NotFoundException(__('Inválido ic'));
		}
		$options = array('conditions' => array('Ic.' . $this->Ic->primaryKey => $id));
		$this->set('ic', $this->Ic->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ic->create();
			if ($this->Ic->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$bovinos = $this->Ic->Bovino->find('list');
		$semems = $this->Ic->Semem->find('list');
		$this->set(compact('bovinos', 'semems'));
	}

	


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ic->exists($id)) {
			throw new NotFoundException(__('Inválido ic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ic->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Ic.' . $this->Ic->primaryKey => $id));
			$this->request->data = $this->Ic->find('first', $options);
		}
		$bovinos = $this->Ic->Bovino->find('list');
		$semems = $this->Ic->Semem->find('list');
		$this->set(compact('bovinos', 'semems'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ic->id = $id;
		if (!$this->Ic->exists()) {
			throw new NotFoundException(__('Inválido ic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ic->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
