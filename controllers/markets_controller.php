<?php
class MarketsController extends AppController {

	var $name = 'Markets';

	function index() {
		$this->Market->recursive = 0;
		$this->set('markets', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid market', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('market', $this->Market->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Market->create();
			if ($this->Market->save($this->data)) {
				$this->Session->setFlash(__('The market has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid market', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Market->save($this->data)) {
				$this->Session->setFlash(__('The market has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The market could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Market->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for market', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Market->delete($id)) {
			$this->Session->setFlash(__('Market deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Market was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function lists($id=null)
	{
	if($id==null)
	  return $this->Market->find('list',array('fields'=>array('Market.id','Market.market_name')));
	else
	  return $this->Market->find('list',array('fields'=>array('Market.id','Market.market_name'),'conditions'=>array('Market.id'=>$id)));
	  
	
	}
}
