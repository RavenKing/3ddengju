<?php
class StorePicsController extends AppController {

	var $name = 'StorePics';

	function index() {
		$this->StorePic->recursive = 0;
		$this->set('storePics', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid store pic', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('storePic', $this->StorePic->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->StorePic->create();
			if ($this->StorePic->save($this->data)) {
				$this->Session->setFlash(__('The store pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pic could not be saved. Please, try again.', true));
			}
		}
		$stores = $this->StorePic->Store->find('list');
		$positions = $this->StorePic->Position->find('list');
		$this->set(compact('stores', 'positions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store pic', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->StorePic->save($this->data)) {
				$this->Session->setFlash(__('The store pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store pic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->StorePic->read(null, $id);
		}
		$stores = $this->StorePic->Store->find('list');
		$positions = $this->StorePic->Position->find('list');
		$this->set(compact('stores', 'positions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store pic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->StorePic->delete($id)) {
			$this->Session->setFlash(__('Store pic deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Store pic was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
