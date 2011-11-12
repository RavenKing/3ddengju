<?php
class UsersController extends AppController {
	var $name = 'Users';
	var $helpers = array('Html','Ajax','Javascript','Cache');
	var $cacheAction=array('view'=>'1 hour','index'=>'1 hour');
    var $components = array ( 'Session' , 'Email' , 'RequestHandler' ); 
	var $paginate = array(
'limit' => 20,
'order' => array(
'User.id' => 'asc'
)
);


   function pictest()
   {
   
    $this->layout="pictest";
  
   
   }
   function ajaxtest()
   {
   $this->layout = 'ajax'; 
      //本地测试时，为了更好地看到效果，模拟延迟状态
        if($this ->RequestHandler->isAjax())
		{
		   sleep(2);	
		}
   
   }
    function search()
    {
      $result=false;
        $this->layout = 'ajax';
if($this->RequestHandler->isAjax())      
	    {//根据提交的关键字进行查询
            $word   = $this->params['data']['User']['username'];
            if($this->User->find('all',array('conditions'=>array('username'=>$word))))
			$result=false;
			else $result=true;			
        }
        $this->set('result', $result);
    }
	 
	  function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow(array('login'));
    }

      function login() {
	  $this->layout='login';
    //Auth Magic
    }
	function register()
	{
    $this->layout='login';
	$this->pageTitle='注册';
	if(!empty($this->data))
	{ $this->User->create();
	  if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('controller' => 'users','action'=>'login'));
	}else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
	}
	}
    function logout() {
	clearCache();
	//Leave empty for now.
    }

	
	function index() {
	     $id=$_SESSION['Auth']['User']['id'];
		 
		$this->set('users', $this->User->Store->find('all',array('conditions'=>array('user_id'=>$id))));
        
         
		}

	function view() {
	$id=$_SESSION['Auth']['User']['id'];
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {		
	$this->set('user', $this->User->read(null, $id));
		
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
		}
	//	$groups = $this->User->Group->find('list');
	//	$this->set(compact('groups'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
function getname()
{
    return $this->User->find('list',array('fields'=>array('User.id','User.username')));

}
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
  
    function adminlist()
{
		$this->User->recursive = 0;
		$this->set('stores', $this->paginate('User',array('User.group_id'=>'1')));
            $this->helpers['Paginator'] = array('ajax' => 'Ajax');
}	
 function shanchu()
 {
 clearCache();
 }

  function nomallist()
  {
  	$this->User->recursive = 1;
		$this->set('stores', $this->paginate('User',array('User.group_id'=>'2')));  
    //$this->helpers['Paginator'] = array('ajax' => 'Ajax');
  }
  function build_acl() {
    if (!Configure::read('debug')) {
    return $this->_stop();
    }
    $log = array();
    $aco =& $this->Acl->Aco;
    $root = $aco->node('controllers');
    if (!$root) {
    $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
    $root = $aco->save();
    $root['Aco']['id'] = $aco->id;
    $log[] = 'Created Aco node for controllers';
    } else {
    $root = $root[0];
    }
    App::import('Core', 'File');
    $Controllers = App::objects('controller');
    $appIndex = array_search('App', $Controllers);
    if ($appIndex !== false ) {
    unset($Controllers[$appIndex]);
    }
    $baseMethods = get_class_methods('Controller');
    $baseMethods[] = 'build_acl';
    $Plugins = $this->_getPluginControllerNames();
    $Controllers = array_merge($Controllers, $Plugins);
    // look at each controller in app/controllers
    foreach ($Controllers as $ctrlName) {
    $methods = $this->_getClassMethods($this->_getPluginControllerPath($ctrlName));
    // Do all Plugins First
    if ($this->_isPlugin($ctrlName)){
    $pluginNode = $aco->node('controllers/'.$this->_getPluginName($ctrlName));
    if (!$pluginNode) {
    $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginName($ctrlName)));
    $pluginNode = $aco->save();
    $pluginNode['Aco']['id'] = $aco->id;
    $log[] = 'Created Aco node for ' . $this->_getPluginName($ctrlName) . ' Plugin';
    }
    }
    // find / make controller node
    $controllerNode = $aco->node('controllers/'.$ctrlName);
    if (!$controllerNode) {
    if ($this->_isPlugin($ctrlName)){
    $pluginNode = $aco->node('controllers/' . $this->_getPluginName($ctrlName));
    $aco->create(array('parent_id' => $pluginNode['0']['Aco']['id'], 'model' => null, 'alias' => $this->_getPluginControllerName($ctrlName)));
    $controllerNode = $aco->save();
    $controllerNode['Aco']['id'] = $aco->id;
    $log[] = 'Created Aco node for ' . $this->_getPluginControllerName($ctrlName) . ' ' . $this->_getPluginName($ctrlName) . ' Plugin Controller';
    } else {
    $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
    $controllerNode = $aco->save();
    $controllerNode['Aco']['id'] = $aco->id;
    $log[] = 'Created Aco node for ' . $ctrlName;
    }
    } else {
    $controllerNode = $controllerNode[0];
    }
    //clean the methods. to remove those in Controller and private actions.
    foreach ($methods as $k => $method) {
    if (strpos($method, '_', 0) === 0) {
    unset($methods[$k]);
    continue;
    }
    if (in_array($method, $baseMethods)) {
    unset($methods[$k]);
    continue;
		}
    $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
    if (!$methodNode) {
    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
    $methodNode = $aco->save();
    $log[] = 'Created Aco node for '. $method;
    }
    }
    }
    if(count($log)>0) {
    debug($log);
    }
    }
    function _getClassMethods($ctrlName = null) {
    App::import('Controller', $ctrlName);
    if (strlen(strstr($ctrlName, '.')) > 0) {
    // plugin's controller
    $num = strpos($ctrlName, '.');
    $ctrlName = substr($ctrlName, $num+1);
    }
    $ctrlclass = $ctrlName . 'Controller';
    $methods = get_class_methods($ctrlclass);
    // Add scaffold defaults if scaffolds are being used
    $properties = get_class_vars($ctrlclass);
    if (array_key_exists('scaffold',$properties)) {
    if($properties['scaffold'] == 'admin') {
    $methods = array_merge($methods, array('admin_add', 'admin_edit', 'admin_index', 'admin_view', 'admin_delete'));
    } else {
    $methods = array_merge($methods, array('add', 'edit', 'index', 'view', 'delete'));
    }
    }
    return $methods;
    }
    function _isPlugin($ctrlName = null) {
    $arr = String::tokenize($ctrlName, '/');
    if (count($arr) > 1) {
    return true;
    } else {
    return false;
    }
    }
    function _getPluginControllerPath($ctrlName = null) {
    $arr = String::tokenize($ctrlName, '/');
    if (count($arr) == 2) {
    return $arr[0] . '.' . $arr[1];
    } else {
    return $arr[0];
    }
    }
    function _getPluginName($ctrlName = null) {
    $arr = String::tokenize($ctrlName, '/');
    if (count($arr) == 2) {
    return $arr[0];
    } else {
    return false;
    }
    }
    function _getPluginControllerName($ctrlName = null) {
    $arr = String::tokenize($ctrlName, '/');
    if (count($arr) == 2) {
    return $arr[1];
    } else {
    return false;
    }
    }
    /**
    * Get the names of the plugin controllers ...
    *
    * This function will get an array of the plugin controller names, and
    * also makes sure the controllers are available for us to get the
    * method names by doing an App::import for each plugin controller.
    *
    * @return array of plugin names.
    *
    */
    function _getPluginControllerNames() {
    App::import('Core', 'File', 'Folder');
    $paths = Configure::getInstance();
    $folder =& new Folder();
    $folder->cd(APP . 'plugins');
    // Get the list of plugins
    $Plugins = $folder->read();
    $Plugins = $Plugins[0];
    $arr = array();
    // Loop through the plugins
    foreach($Plugins as $pluginName) {
    // Change directory to the plugin
    $didCD = $folder->cd(APP . 'plugins'. DS . $pluginName . DS . 'controllers');
    // Get a list of the files that have a file name that ends
    // with controller.php
    $files = $folder->findRecursive('.*_controller\.php');
    // Loop through the controllers we found in the plugins directory
    foreach($files as $fileName) {
    // Get the base file name
    $file = basename($fileName);
    // Get the controller name
    $file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));
    if (!preg_match('/^'. Inflector::humanize($pluginName). 'App/', $file)) {
    if (!App::import('Controller', $pluginName.'.'.$file)) {
    debug('Error importing '.$file.' for plugin '.$pluginName);
    } else {
    /// Now prepend the Plugin name ...
    // This is required to allow us to fetch the method names.
    $arr[] = Inflector::humanize($pluginName) . "/" . $file;
    }
    }
    }
    }
    return $arr;
    }
    function initDB() {
    $group =& $this->User->Group;
    //Allow admins to everything
    $group->id = 1;
    $this->Acl->allow($group, 'controllers');
    //allow managers to posts and widgets
    $group->id = 2;
    $this->Acl->allow($group, 'controllers');
    //allow users to only add and edit on posts and widgets

    echo "all done";
    exit;
    }

	
	}
?>