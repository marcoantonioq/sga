<?php 
App::uses('AppHelper', 'View/Helper'); 
class EventoHelper extends AppHelper {
	public $helpers = array('Html', 'Form');

	public function status($status) {
		switch ($status) {
			case '1': $return = "Aberto";
				break;
			case '2': $return = "Fechado";
				break;
			case '2': $return = "Em andamento";
				break;			
			default:
				break;
		}
		return $return;
	}
} 

?>

