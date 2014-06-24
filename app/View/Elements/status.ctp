<?php 
	/*
		pr($this->request->params['pass']['0']);
		pr($this->request->data);
		pr($this->request->url);
	*/

$status = ($status === true) ? 'icomoon-icon-checkmark' : 'icomoon-icon-cancel-2';

$url = array(
	'admin' => isset($admin) ? $admin : false,
	'plugin' => isset($plugin) ? $plugin : $this->request->params['plugin'],
	'controller' => isset($controller) ? $controller : $this->request->params['controller'],
	'action' => isset($action) ? $action : $this->request->params['action'],
	$id,
	$status,
);

echo $this->Html->link(
	"<span class='{$status}'></span>",
	$url,
	array('escape'=>false)
);
