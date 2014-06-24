<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Messages Controller
 *
 * @property Message $Message
 */
class HelpController extends AppController {

	public function beforeFilter( )
	{
		$this->set('title_for_layout', 'Ajuda');
	}

	public function send(){
		if (!empty($this->request->data)){
			$Email = new CakeEmail('smtp');
			$Email->emailFormat('html');
			$Email->to($this->request->data['Message']['to']);
			$Email->subject($this->request->data['Message']['subject']);
			if($Email->send($this->request->data['Message']['message'] ) ){
				$this->Session->setFlash("Email enviado com sucesso", 'success');
				$this->redirect(array('action' => 'index'));
			}else{
				$this->Session->setFlash("Erro ao enviar email!", 'error');
			}
		}
	}
}
