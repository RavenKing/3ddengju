<?php
class AdvertisementPicsController extends AppController {

	var $name = 'AdvertisementPics';

	function index() {
		$this->AdvertisementPic->recursive = 0;
		$this->set('advertisementPics', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid advertisement pic', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('advertisementPic', $this->AdvertisementPic->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AdvertisementPic->create();
			if ($this->AdvertisementPic->save($this->data)) {
				$this->Session->setFlash(__('The advertisement pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advertisement pic could not be saved. Please, try again.', true));
			}
		}
		$users = $this->AdvertisementPic->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid advertisement pic', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AdvertisementPic->save($this->data)) {
				$this->Session->setFlash(__('The advertisement pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advertisement pic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AdvertisementPic->read(null, $id);
		}
		$users = $this->AdvertisementPic->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for advertisement pic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AdvertisementPic->delete($id)) {
			$this->Session->setFlash(__('Advertisement pic deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Advertisement pic was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
