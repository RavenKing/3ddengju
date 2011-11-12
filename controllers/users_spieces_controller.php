<?php
class UsersSpiecesController extends AppController {

	var $name = 'UsersSpieces';

	function index() {
		$this->UsersSpiece->recursive = 0;
		$this->set('usersSpieces', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users spiece', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersSpiece', $this->UsersSpiece->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersSpiece->create();
			if ($this->UsersSpiece->save($this->data)) {
				$this->Session->setFlash(__('The users spiece has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users spiece could not be saved. Please, try again.', true));
			}
		}
			$users = $this->UsersSpiece->User->find('list',array('fields'=>array('User.id','User.username')));
		$spieces = $this->UsersSpiece->Spiece->find('list',array('fields'=>array('Spiece.id','Spiece.spiece_name')));
		$this->set(compact('users', 'spieces'));
	}	
	function add1() {
		if (!empty($this->data)) {
			$this->UsersSpiece->create();
			if ($this->UsersSpiece->save($this->data)) {
				$this->Session->setFlash(__('The users spiece has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users spiece could not be saved. Please, try again.', true));
			}
		}
			$users = $this->UsersSpiece->User->find('list',array('fields'=>array('User.id','User.username')));
		$spieces = $this->UsersSpiece->Spiece->find('list',array('fields'=>array('Spiece.id','Spiece.spiece_name')));
		$this->set(compact('users', 'spieces'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users spiece', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersSpiece->save($this->data)) {
				$this->Session->setFlash(__('The users spiece has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users spiece could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersSpiece->read(null, $id);
		}
		$users = $this->UsersSpiece->User->find('list',array('fields'=>array('User.id','User.username')));
		$spieces = $this->UsersSpiece->Spiece->find('list');
		$this->set(compact('users', 'spieces'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users spiece', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersSpiece->delete($id)) {
			$this->Session->setFlash(__('Users spiece deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users spiece was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function lists()
	{
if($_SESSION['Auth']['User']['group_id']!=1)
	{$id=$_SESSION['Auth']['User']['id'];
 $spieces=$this->UsersSpiece->query("select distinct spieces.id,spiece_name from users_spieces,spieces where user_id = $id and spieces.id=spiece_id and level =1"); 
	 return $spieces;	
	}
	else return $this->UsersSpiece->query("select distinct spieces.id,spiece_name from users_spieces,spieces where level =1"); 
	}
	function showapply()
	{
	$result=$this->UsersSpiece->find('all',array('conditions'=>array('level'=>'0')));
	$this->set('results',$result);
	}
	function applyaction($id=null)
	{
	 if(!$id)
	 {//echo "error";
	 // sleep(1);
	  $this->redirect(array('action'=>'showapply'));
	 }
	else{
	 if($this->UsersSpiece->query("update users_spieces set level=1 where id=$id"))
	 {  //echo "success";
	  //  sleep(1);
	  $this->redirect(array('controller'=>'UsersSpieces','action'=>'showapply'));
     }
	 else echo "update error";
	}
	
	
	
	}
}