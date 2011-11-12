<?php
class ProductDetailsController extends AppController {

	var $name = 'ProductDetails';

	function index() {
		$this->ProductDetail->recursive = 0;
		$this->set('productDetails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product detail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productDetail', $this->ProductDetail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductDetail->create();
			if ($this->ProductDetail->save($this->data)) {
				$this->Session->setFlash(__('The product detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.', true));
			}
		}
		$productCategories = $this->ProductDetail->ProductCategory->find('list');
		$this->set(compact('productCategories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product detail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductDetail->save($this->data)) {
				$this->Session->setFlash(__('The product detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product detail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductDetail->read(null, $id);
		}
		$productCategories = $this->ProductDetail->ProductCategory->find('list');
		$this->set(compact('productCategories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product detail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductDetail->delete($id)) {
			$this->Session->setFlash(__('Product detail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	
	function lists()
	{
	
	$options=Array();
	$i=1;
	for($i=1;$i<6;$i++)
		$options[$i]=$this->ProductDetail->find('list',array('fields'=>array('ProductDetail.id','ProductDetail.pdetail_name'),'conditions'=>array('ProductDetail.product_category_id'=>$i)));
	   
	
	  return   $options; 
    }
	function getdetailname($id=null)
	{
	 $options=$this->ProductDetail->find('list',array('fields'=>array('ProductDetail.pdetail_name'),'conditions'=>array('ProductDetail.id'=>$id)));
	return $options;   
	}
	
	}
