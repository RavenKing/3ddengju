<?php
class StoresController extends AppController {
	var $name = 'Stores';
	var $helpers = array('Html','Ajax','Javascript');
    var $components = array( 'Session' , 'Email' , 'RequestHandler' ); 
	 
	function index($id=null) {
	
	 $id=$_SESSION['Auth']['User']['id'];
	 	if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
	 $id=$_SESSION['Auth']['User']['id'];
	 $result=$this->Store->find('all',array('conditions'=>array('user_id'=>$id)));
		$this->set('stores', $result);
		}

	}
	function view() {
		$this->Store->recursive = 1;
		$this->set('stores', $this->paginate());
	}
	function register()
	{
	$this->layout='register';
	ob_start();
   	$id=$_SESSION['Auth']['User']['id'];
	(($result=$this->Store->find('all',array('conditions'=>array('user_id'=>$id)))));	
	 if(!empty($result))
	 {
	 $this->redirect(array('controller'=>'stores','action'=>'index'));
ob_end_flush();
	 }else
	{
	$this->pageTitle='商家注册';
	if (!empty($this->data)) {
			$this->Store->create();
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
	}
	}
	   function search()
    {
      $result=0;
        $this->layout = 'ajax';
     if($this->RequestHandler->isAjax())      
	    {//根据提交的关键字进行查询
          $word= $this->params['data']['Store']['store_name'];
            if($this->Store->find('all',array('conditions'=>array('store_name'=>$word))))
			$result=1;
			else $result=0;			
        }
        $this->set('result', $result);
    }
	 
	function add() {
		if (!empty($this->data)) {
			$this->Store->create();
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		$markets = $this->Store->Market->find('list');
		$users = $this->Store->User->find('list');
		$this->set(compact('markets', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Store->read(null, $id);
		}
		$markets = $this->Store->Market->find('list');
		$users = $this->Store->User->find('list');
		$this->set(compact('markets', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Store->delete($id)) {
			$this->Session->setFlash(__('Store deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Store was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function countnew(){
    return $this->Store->query("select count(*) from stores where level=0");
   }

   function apply()
   {
    $result=$this->Store->find('all',array('conditions'=>array('level'=>'0')));
   // $result=$this->Store->query("select * from stores where level=0");
	$this->set('results',$result);
   }
   function applyaction()
   {
        $data=$_POST['check'];
   foreach((Array)$data as $v)
   {
     if($this->Store->query("update stores set level=1 where id=$v"))
	 //echo "success"; 
	 $this->redirect(array('action'=>'apply'));
   }
   }
   
   
   function getstoreid()
   {
    $id=$_SESSION['Auth']['User']['id'];
	return $this->Store->find('first',array('conditions'=>array('user_id'=>$id)));
   }
   function getstores()
   {
   
    return $this->Store->find('list',array('fields'=>array('Store.id','Store.store_name')));
   
   }
   
   function viewdetail($id=null)
   {
   	if (!$id) {
			$this->Session->setFlash(__('Invalid stores', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('stores', $this->Store->read(null, $id));
   }
   
   
   }
   

?>