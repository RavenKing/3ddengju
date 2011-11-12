<?php
class NoticesController extends AppController {

	var $name = 'Notices';

	function index() {
		$this->Notice->recursive = 0;
		$this->set('notices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid notice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('notice', $this->Notice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Notice->create();
			if ($this->Notice->save($this->data)) {
				$this->Session->setFlash(__('The notice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notice could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Notice->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid notice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Notice->save($this->data)) {
				$this->Session->setFlash(__('The notice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Notice->read(null, $id);
		}
		$users = $this->Notice->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for notice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Notice->delete($id)) {
			$this->Session->setFlash(__('Notice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Notice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
function getnotice()
{
return $this->Notice->find('first');
}
	
	
	}
