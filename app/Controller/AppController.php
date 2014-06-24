<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $helpers = array('Link');

	public $components = array(
        'Controllers',
		'RequestHandler',
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email',
                        'password'=>'password'
                    ),
                    'scope'  => array(
                        'User.status' => 1
                    )
                )
            ),
            // /*
            'authError' => 'Você não possui autorização para executar esta ação.',
            'flash' => array(
                'element' => 'info',
                'key' => 'auth',
                'params' => array()
            ),
            'authorize' => array('Controller'),
            'loginAction' => array(
                'admin' => false,
                'plugin' => false,
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array('admin' => false,'plugin'=>false, 'controller' => 'pages', 'action' => 'display'),
            'logoutRedirect' => array('admin' => false,'plugin'=>false, 'controller' => 'pages', 'action' => 'display'),
            // */
        )
    );

    public function index()
    {        
        if ($this->request->is('post')) {
            
            $name = $this->uses[0];

            $this->request->data = $this->$name->action($this->request->data);
            $this->Paginator->settings = $this->$name->pagination();

                // pr($this->request->data); exit;
            
            if(!empty($this->Paginator->settings['conditions']))
            {
                $filtro = "";
                foreach ($this->Paginator->settings['conditions'] as $type => $filter) {
                    $filtro .= "<li>".$this->Controllers->filter($type)." \"".str_replace('%', '', $filter)."\"</li>";
                }
                $this->Session->setFlash((empty($filtro)?'Nenhum filtro definido!':
                    "<span class='right'> <a href='javascript:window.history.go(-1)''>Voltar</a> </span>Filtro(s): $filtro"), 
                    'info'
                );
            }
        }

        // $no = array('sort', 'direction', 'page');
        // foreach ($this->request->params['named'] as $name => $value) {
        //     if ( !in_array($name, $no) ) {
        //         $this->Paginator->settings['conditions']["{$name}"] = $value;
        //     }
        // }
    }

	public function beforeFilter() {
        parent::beforeFilter();
        if(isset($this->request->params['prefix'])){
            if($this->request->params['prefix']=='admin'){
                $this->layout = 'admin';
            }
        }else{
            $this -> layout = 'default';
        }

        //$this->Auth->allow();
        //$this->Auth->deny();
        // $this->forceSSL();
    }

    public function forceSSL() {
        if (empty($_SERVER['HTTPS']) ) {
            echo $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $this->redirect($url);
        }
    }

    public function isAuthorized($user = null){

        $permission["pages"]= array(
            1,
            1,
            1,
            1
        );
        // $permission["bovinos"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );

        // $permission["pessoas"]= array(
        //     1,
        //     1,
        //     1,
        //     1
        // );

        // $permission["cargos"]= array(
        //     1,
        //     1,
        //     1,
        //     0
        // );
        // $permission["centralcustos"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["clientes"]= array(
        //     1,
        //     1,
        //     1,
        //     0
        // );
        // $permission["contas"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["doencas"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["fabricantes"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["fazendas"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["forncedores"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["grupos"]= array(
        //     1,
        //     1,
        //     1,
        //     0
        // );
        // $permission["centralcustos"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["ics"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["leitepesagens"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["medicamentos"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["movbovinos"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["eventos"]= array(
        //     1,
        //     1,
        //     array('index'),
        //     1
        // );
        // $permission["ordenhas"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["pastos"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["patrimonios"]= array(
        //     1,
        //     1,
        //     1,
        //     0
        // );
        // $permission["retiros"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["semems"]= array(
        //     1,
        //     1,
        //     0,
        //     1
        // );
        // $permission["categoriaps"]= array(
        //     1,
        //     1,
        //     0,
        //     0
        // );
        // $permission["users"]= array(
        //     1,
        //     1, // array('login', 'logout'),
        //     1,
        //     array('login', 'logout'),
        // );

        // $permission["Atalhos"]= array(
        //     1,
        //     1,
        //     1,
        //     1,
        // );

        // $permission["Alerts"]= array(
        //     1,
        //     1,
        //     1,
        //     1,
        // );

        return true;


        $controller = $this->request->params['controller'];
        $grupo = $user['group_id']-1;

        // echo "<p>".$controller;
        // pr($permission['Alerts']);
        if (array_key_exists($controller, $permission)) 
        {
            if(is_array($permission[$controller][$grupo]))
            {   
                // echo "<br>Fim1: "; echo (in_array($this->request->params['action'], $permission[$controller][$grupo])) ? "permitido": "não";
                return in_array($this->request->params['action'], $permission[$controller][$grupo]);
            }
            else
            {
                // echo "<br>Fim2: "; echo ($permission[$controller][$grupo] == 1) ? "permitido": "não";
                return (bool)( $permission[$controller][$grupo] == 1);
            }
        }
        // echo "<br>Fim.";
        return true;
    }
    
}
