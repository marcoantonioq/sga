<?php 
// class FormComponent extends Component { 
// 	protected $_Controller;

// 	//public function startup(&$controller, $settings = array()) {
// 	public function initialize(Controller $controller, $settings = array()) {
// 		$this->_Controller = $controller;
// 	     //pr($controller); exit;
// 	}
	
// 	public function action( ) { 
// 		// pr($this_Controller); 
// 		// echo "testess";
// 		// exit;
// 		$data = $this->_Controller->data;
// 		$this->$data['action']();
// 	} 

// 	public function __edit( ) { 
// 		echo 'editar';
// 		pr($this->_Controller->data);
// 	} 

// 	public function __delete( ) { 
// 		echo 'apagar';

// 		pr($this->_Controller->data);
// 		foreach ($this->_Controller->data['row'] as $key => $id) { 
// 			pr($this->User);
// 			pr($id);
// 			//if (!$this->User->exists($id)) {
// 				//$error = 'User não existe';
// 			//}
// 			/*if ($this->User->delete()) {
			
// 			}*/
// 		}
// 	}

// 	/*public function delete($id = null) {
// 		$this->User->id = $id;
// 		if (!$this->User->exists()) {
// 			throw new NotFoundException(__('Inválido user'));
// 		}
// 		$this->request->onlyAllow('post', 'delete');
// 		if ($this->User->delete()) {
// 			$this->Session->setFlash(__('O user foi excluído.'), 'success');
// 		} else {
// 			$this->Session->setFlash(__('O user não foi excluído. Por favor, tente novamente.'), 'error');
// 		}
// 		return $this->redirect(array('action' => 'index'));
// 	}
// 	*/
// }
