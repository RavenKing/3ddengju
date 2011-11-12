<?php
class LatestListsController extends AppController {

	var $name = 'LatestLists';

	function index() {
		$this->LatestList->recursive = 0;
		$this->set('latestLists', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid latest list', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('latestList', $this->LatestList->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LatestList->create();
			if ($this->LatestList->save($this->data)) {
				$this->Session->setFlash(__('The latest list has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The latest list could not be saved. Please, try again.', true));
			}
		}
		$products = $this->LatestList->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid latest list', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LatestList->save($this->data)) {
				$this->Session->setFlash(__('The latest list has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The latest list could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LatestList->read(null, $id);
		}
		$products = $this->LatestList->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for latest list', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LatestList->delete($id)) {
			$this->Session->setFlash(__('Latest list deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Latest list was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
