<?php 
class FilterComponent extends Component { 
	protected $_Controller;
	protected $data;
	protected $pagination;

	//public function startup(&$controller, $settings = array()) {
	public function initialize(Controller $controller, $settings = array()) {
		$this->_Controller = $controller;
		$nameController = $controller->request->controller;

	    // pr($controller->request->controller);
	    // pr($controller->request->data);

	    if (!empty($controller->request->data['action'])) {
     		$this->data = $nameController->action();
			// $this->settings = $this->$nameController->pagination();
	  		pr($this->$nameController->action);
	    }
	}

	public function pagination( ) {
		return "paginationss";
		return (empty($this->pagination)) ? null : $this->pagination;
	}

	private function __search(){
		if (empty($this->data['type']) || empty($this->data['Actions']['filter'][0])) 
		{
			return null;
		}
		$this->pagination['recursive'] = 1;

		for ($i=4 ; $i >= 0; $i--) 
		{			
			$campo = $this->data['type'][$i];
			$filter = $this->data['Actions']['filter'][$i];

			if(!empty($filter))			
				$this->pagination['conditions'][$campo] = $filter;

			if($i > 0){
				$this->data['type'][$i] = $this->data['type'][$i-1];
				$this->data['Actions']['filter'][$i] = $this->data['Actions']['filter'][$i-1];				
			}
		}
	}

	public function __edit( ) { 
		echo 'editar';
		pr($this->_Controller->data);
	} 

	public function __delete( ) { 
		echo 'apagar';

		pr($this->_Controller->data);
		foreach ($this->_Controller->data['row'] as $key => $id) { 
			pr($this->User);
			pr($id);
			//if (!$this->User->exists($id)) {
				//$error = 'User não existe';
			//}
			/*if ($this->User->delete()) {
			
			}*/
		}
	}

	/*public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Inválido user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('O user foi excluído.'), 'success');
		} else {
			$this->Session->setFlash(__('O user não foi excluído. Por favor, tente novamente.'), 'error');
		}
		return $this->redirect(array('action' => 'index'));
	}
	*/
}
