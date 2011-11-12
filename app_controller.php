<?php
    class AppController extends Controller {
    var $components = array('Acl', 'Auth', 'Session');
    var $helpers = array('Html', 'Form', 'Session','Javascript','Ajax');
    function beforeFilter() {
    //Configure AuthComponent
    $this->Auth->authorize = 'actions';
    $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
    $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'logout');
    $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
    $this->Auth->actionPath = 'controllers/';
	$this->Auth->allow('*');
    }
    }
    ?>
