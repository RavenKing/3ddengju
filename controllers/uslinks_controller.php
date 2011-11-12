<?php
class UslinksController extends AppController {

	var $name = 'Uslinks';

	function index() {
		$this->Uslink->recursive = 0;
		$this->set('uslinks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid uslink', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uslink', $this->Uslink->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Uslink->create();
			if ($this->Uslink->save($this->data)) {
				$this->Session->setFlash(__('The uslink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uslink could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Uslink->User->find('list');
		$spieces = $this->Uslink->Spiece->find('list');
		$this->set(compact('users', 'spieces'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid uslink', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Uslink->save($this->data)) {
				$this->Session->setFlash(__('The uslink has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uslink could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Uslink->read(null, $id);
		}
		$users = $this->Uslink->User->find('list');
		$spieces = $this->Uslink->Spiece->find('list');
		$this->set(compact('users', 'spieces'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for uslink', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Uslink->delete($id)) {
			$this->Session->setFlash(__('Uslink deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Uslink was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
