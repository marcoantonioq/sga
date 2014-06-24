<?php 
class ControllersComponent extends Component { 
	protected $_Controller;
	protected $data;
	protected $pagination;
	protected $nameController;

	//public function startup(&$controller, $settings = array()) {
	public function initialize(Controller $controller, $settings = array()) {
		
	}

	public function filter($word){
        $rules = array( 
			'NOT LIKE'   => 'não contenha',
			'LIKE BEGIN' => 'começando com',
			'LIKE END'   => 'terminando com',
			'LIKE'       => 'contenha',
			'='  => 'igual',
			'!=' => 'diferente',
			'>'  => 'maior do que',
			'>=' => 'maior ou igual a',
			'<'  => 'menor que',
			'<=' => 'menor ou igual a'
        );
        
        foreach(array_keys($rules) as $key){
            $string = substr($word, 0, strlen($word) - strlen($key)); 
            $string = explode('.', $string);
            if(substr($word, (strlen($key) * -1)) != $key){
                continue;
            }
            if($key === false){
                return ucfirst(__(trim($string[0]))).', '.ucfirst(__(trim($string[1])));
            }
            $string = ucfirst(__(trim($string[0]))).', '.ucfirst(__(trim($string[1]))).' '.$rules[$key];
            return $string; 
        }
        return ucfirst(__(trim($string[0]))).', '.ucfirst(__(trim($string[1])));
    }
}
