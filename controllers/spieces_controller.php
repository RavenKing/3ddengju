<?php
class SpiecesController extends AppController {

	var $name = 'Spieces';
	function lists(){
	 return $this->Spiece->find('list',array('fields'=>array('Spiece.id','Spiece.spiece_name')));
	}
	
	function index() {
		$this->Spiece->recursive = 0;
		$this->set('spieces', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid spiece', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('spiece', $this->Spiece->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Spiece->create();
			if ($this->Spiece->save($this->data)) {
				$this->Session->setFlash(__('The spiece has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spiece could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Spiece->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid spiece', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Spiece->save($this->data)) {
				$this->Session->setFlash(__('The spiece has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spiece could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Spiece->read(null, $id);
		}
		$users = $this->Spiece->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for spiece', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Spiece->delete($id)) {
			$this->Session->setFlash(__('Spiece deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Spiece was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
  function home()
  {
     $this->set("spieces",$this->Spiece->find('list',array('fields'=>array('Spiece.id','Spiece.spiece_name'))));
  }

	
	}
