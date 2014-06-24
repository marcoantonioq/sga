<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 * @property PaginatorComponent $Paginator
 */
class EventosController extends AppController {
	public function beforeFilter(){
		parent::beforeFilter();
		$this->set('title_for_layout', 'Eventos');
		$this->Auth->allow("count", "count_status");
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
		if ($this->request->is('post')) {
			$this->request->data = $this->Evento->action($this->request->data, $this->Paginator->settings);
			$this->Paginator->settings = $this->Evento->pagination();
		}
		$this->Evento->recursive = 0;
		$this->set('eventos', $this->Paginator->paginate());
		parent::index();
	}

	public function count($id='')
	{
		$this->Evento->recursive = -1;
		return $this->Evento->find('count', array('Evento.status'=>1));
	}
	/**
	 * actionRequest action method
	 *
	 * @return int
	 */

	public function count_status($params) {
		if ($this->request->is('requested')) {
			$eventos = $this->Evento->find('count', array(
				'conditions'=> array(
					'Evento.status' => $params
				)
			));
			return $eventos;
		}
		$this->redirect("/");
	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Inválido evento'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$users = $this->Evento->User->find('list');
		$bovinos = $this->Evento->Bovino->find('list');
		$categoriaseventos = $this->Evento->Categoriasevento->find('list');
		$ics = $this->Evento->Ic->find('list');
		$doencas = $this->Evento->Doenca->find('list');
		$this->set(compact('users', 'bovinos', 'categoriaseventos', 'ics', 'doencas'));
	}

	public function vacinar() {
		if ($this->request->is('post')) {
			if($this->request->data['Evento']['submit'])
			{
				echo "submit";
			}
			pr($this->request->data); 
			// exit;
			// $this->Evento->create();
			// if ($this->Evento->save($this->request->data)) {
			// 	$this->Session->setFlash(__('Foi salvo.'), 'success');
			// 	return $this->redirect(array('action' => 'index'));
			// } else {
			// 	$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			// }
		}
		$users = $this->Evento->User->find('list');
		$bovinos = $this->Evento->Bovino->find('list');
		$categoriaseventos = $this->Evento->Categoriasevento->find('list');
		$ics = $this->Evento->Ic->find('list');
		$doencas = $this->Evento->Doenca->find('list');
		$this->set(compact('users', 'bovinos', 'categoriaseventos', 'ics', 'doencas'));
	}

	
	public function mamite() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$users = $this->Evento->User->find('list');
		$bovinos = $this->Evento->Bovino->find('list');
		$categoriaseventos = $this->Evento->Categoriasevento->find('list');
		$ics = $this->Evento->Ic->find('list');
		$doencas = $this->Evento->Doenca->find('list');
		$this->set(compact('users', 'bovinos', 'categoriaseventos', 'ics', 'doencas'));
	}

	public function secagem() {
		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		}
		$users = $this->Evento->User->find('list');
		$bovinos = $this->Evento->Bovino->find('list');
		$categoriaseventos = $this->Evento->Categoriasevento->find('list');
		$ics = $this->Evento->Ic->find('list');
		$doencas = $this->Evento->Doenca->find('list');
		$this->set(compact('users', 'bovinos', 'categoriaseventos', 'ics', 'doencas'));
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Inválido evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Foi salvo.'), 'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Não pôde ser salvo. Por favor, tente novamente.'), 'error');
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
		}
		$users = $this->Evento->User->find('list');
		$bovinos = $this->Evento->Bovino->find('list');
		$categoriaseventos = $this->Evento->Categoriasevento->find('list');
		$ics = $this->Evento->Ic->find('list');
		$doencas = $this->Evento->Doenca->find('list');
		$this->set(compact('users', 'bovinos', 'categoriaseventos', 'ics', 'doencas'));
	}
	

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Inválido evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evento->delete()) {
	
			$this->Session->setFlash(__('Foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('Não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}

}
