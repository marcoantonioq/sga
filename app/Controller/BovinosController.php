<?php
App::uses('AppController', 'Controller');
/**
 * Bovinos Controller
 *
 * @property Bovino $Bovino
 * @property PaginatorComponent $Paginator
 */
class BovinosController extends AppController {
	
	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Animais/Bovinos');
		$this->Auth->allow('index', 'view');
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
		$this->Bovino->recursive = 0;
		$this->set('bovinos', $this->Paginator->paginate());
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bovino->exists($id)) {
			throw new NotFoundException(__('Inválido bovino'));
		}
		$options = array(
			'conditions' => array(
				'Bovino.id' => $id
			)
		);
		$bovino = $this->Bovino->find('first', $options);
		$heranca = $this->Bovino->heranca($id);
		$this->set(compact('bovino', 'heranca'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bovino->create();
			if ($this->Bovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$pastos = $this->Bovino->Pasto->find('list');
		$categoriabs = $this->Bovino->Categoriab->find('list');
		$sexobovinos = $this->Bovino->Sexobovino->find('list');
		$pelagens = $this->Bovino->Pelagen->find('list');
		$racas = $this->Bovino->Raca->find('list');
		$this->set(compact('pastos', 'categoriabs', 'sexobovinos', 'pelagens', 'racas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bovino->exists($id)) {
			throw new NotFoundException(__('Inválido bovino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Bovino.' . $this->Bovino->primaryKey => $id));
			$this->request->data = $this->Bovino->find('first', $options);
		}
		$pastos = $this->Bovino->Pasto->find('list');
		$categoriabs = $this->Bovino->Categoriab->find('list');
		$sexobovinos = $this->Bovino->Sexobovino->find('list');
		$pelagens = $this->Bovino->Pelagen->find('list');
		$racas = $this->Bovino->Raca->find('list');
		$this->set(compact('pastos', 'categoriabs', 'sexobovinos', 'pelagens', 'racas'));
	}

	public function financeiro($id = null) {
		if (!$this->Bovino->exists($id)) {
			throw new NotFoundException(__('Inválido bovino'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bovino->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'info');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Bovino.' . $this->Bovino->primaryKey => $id));
			$this->request->data = $this->Bovino->find('first', $options);
		}
		$pastos = $this->Bovino->Pasto->find('list');
		$categoriabs = $this->Bovino->Categoriab->find('list');
		$sexobovinos = $this->Bovino->Sexobovino->find('list');
		$pelagens = $this->Bovino->Pelagen->find('list');
		$racas = $this->Bovino->Raca->find('list');
		$this->set(compact('pastos', 'categoriabs', 'sexobovinos', 'pelagens', 'racas'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bovino->id = $id;
		if (!$this->Bovino->exists()) {
			throw new NotFoundException(__('Inválido bovino'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Bovino->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
