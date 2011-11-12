<?php
class OnsaleListsController extends AppController {

	var $name = 'OnsaleLists';

	function index() {
		$this->OnsaleList->recursive = 0;
		$this->set('onsaleLists', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid onsale list', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('onsaleList', $this->OnsaleList->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->OnsaleList->create();
			if ($this->OnsaleList->save($this->data)) {
				$this->Session->setFlash(__('The onsale list has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The onsale list could not be saved. Please, try again.', true));
			}
		}
		$products = $this->OnsaleList->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid onsale list', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OnsaleList->save($this->data)) {
				$this->Session->setFlash(__('The onsale list has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The onsale list could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OnsaleList->read(null, $id);
		}
		$products = $this->OnsaleList->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for onsale list', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OnsaleList->delete($id)) {
			$this->Session->setFlash(__('Onsale list deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Onsale list was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
