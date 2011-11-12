<?php
class ProductHeadsController extends AppController {

	var $name = 'ProductHeads';

	function index() {
		$this->ProductHead->recursive = 0;
		$this->set('productHeads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product head', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productHead', $this->ProductHead->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductHead->create();
			if ($this->ProductHead->save($this->data)) {
				$this->Session->setFlash(__('The product head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product head could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductHead->Product->find('list');
		$this->set(compact('products'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product head', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductHead->save($this->data)) {
				$this->Session->setFlash(__('The product head has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product head could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductHead->read(null, $id);
		}
		$products = $this->ProductHead->Product->find('list');
		$this->set(compact('products'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product head', true));
		//	$this->redirect(array('action'=>'index'));
		}
		
		if ($this->ProductHead->query("delete from product_heads where product_id=$id")) {
  			$this->redirect(array('controller'=>'ProductPics','action'=>'delete',$id));
		}
		print_r($id);
		$this->Session->setFlash(__('Product head was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}	
	function deleteit($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product head', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductHead->delete($id)) {
			$this->Session->setFlash(__('Product head deleted', true));
			$this->redirect(array('controller'=>'Products','action'=>'delete',$id));
		}
		$this->Session->setFlash(__('Product head was not deleted', true));
	$this->redirect(array('controller'=>'Products','action'=>'delete',$id));
	}
}
