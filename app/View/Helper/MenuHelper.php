

<?php 
App::uses('AppHelper', 'View/Helper'); 
class MenuHelper extends AppHelper {

    public $helpers = array('Link');

	private function lista($var)
	{
		if(!isset($var[0])){
			return true;
		}
        echo "<li>";
        echo $this->Link->icon($var[0],$var[1],$var[2]);
        if(!empty($var[3]))
        {
            echo "<ul class='sub'>";			
            for ($i=3; ; $i++)
            {
            	if(isset($var[$i]))
            	{
	            	if( $this->lista($var[$i]) )
	            	{
	            		break;
	            	}
            	}
            	else
            	{
            		break;
            	}
            }
            echo "</ul> ";
        }
        echo "</li>";
	}

	public function gerar($var = array()) {
		echo '<ul>';
		foreach ($var as $value) {
			$this->lista($value);
			//break;
		}
		echo '</ul>';        
		//pr($var);
		//exit;
	}

	public function permission($grupo, $url)
	{
    	$grupo -= 1; 
		if ($grupo == 0) {
			return true;
		}
    	extract($url);
		// 0 => Admin
		// 1 => Financeiro
		// 2 => RH
		// 3 => Manejo


		$permission["pages"]= array(
	        1,
	        1,
	        1,
	        1
	    );
	    $permission["bovinos"]= array(
	        1,
	        1,
	        0,
	        1
	    );

	    $permission["pessoas"]= array(
	        1,
	        1,
	        1,
	        1
	    );

	    $permission["cargos"]= array(
	        1,
	        0,
	        1,
	        0
	    );
	    $permission["centralcustos"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["clientes"]= array(
	        1,
	        1,
	        1,
	        0
	    );
	    $permission["contas"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["doencas"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["fabricantes"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["fazendas"]= array(
	        1,
	        1,
	        0,
	        1
	    );
	    $permission["forncedores"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["grupos"]= array(
	        1,
	        0,
	        1,
	        0
	    );
	    $permission["centralcustos"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["ics"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["leitepesagens"]= array(
	        1,
	        1,
	        0,
	        1
	    );
	    $permission["medicamentos"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["movbovinos"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["eventos"]= array(
	        1,
	        1,
	        array('index'),
	        1
	    );
	    $permission["ordenhas"]= array(
	        1,
	        1,
	        0,
	        1
	    );
	    $permission["pastos"]= array(
	        1,
	        1,
	        0,
	        1
	    );
	    $permission["patrimonios"]= array(
	        1,
	        1,
	        1,
	        0
	    );
	    $permission["retiros"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["semems"]= array(
	        1,
	        0,
	        0,
	        1
	    );
	    $permission["categoriaps"]= array(
	        1,
	        1,
	        0,
	        0
	    );
	    $permission["users"]= array(
	        1,
	        array('login', 'logout'),
	        1,
	        array('login', 'logout'),
	    );

	    $permission["Atalhos"]= array(
	        1,
	        1,
	        1,
	        1,
	    );

	    $permission["Alerts"]= array(
	        1,
	        1,
	        1,
	        1,
	    );

	    // verifica se possui regra
	    if (array_key_exists($controller, $permission)) 
        {
        	// verifica se e array
            if(is_array($permission[$controller][$grupo]))
            {
            	if( !empty($action) && in_array($action, $permission[$controller][$grupo]) )
            	{
            		return true;
            	}
            	else
            	{
            		return false;
            	}
            }
            else
            {
                // echo "<br>Fim2: "; echo ($permission[$controller][$grupo] == 1) ? "permitido": "não";
                return (bool)( $permission[$controller][$grupo]);
            }
        }
        // echo "<br>Fim.<br>";
        return false;
	}


} 

?>
