<?php
class ProductCategoryDetailsController extends AppController {

	var $name = 'ProductCategoryDetails';

	function index() {
		$this->ProductCategoryDetail->recursive = 0;
		$this->set('productCategoryDetails', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product category detail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productCategoryDetail', $this->ProductCategoryDetail->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductCategoryDetail->create();
			if ($this->ProductCategoryDetail->save($this->data)) {
				$this->Session->setFlash(__('The product category detail has been saved', true));
				$this->redirect(array('controller'=>'ProductPics','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category detail could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductCategoryDetail->Product->find('list');
		$productDetails = $this->ProductCategoryDetail->ProductDetail->find('list');
		$this->set(compact('products', 'productDetails'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product category detail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductCategoryDetail->save($this->data)) {
				$this->Session->setFlash(__('The product category detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product category detail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductCategoryDetail->read(null, $id);
		}
		$products = $this->ProductCategoryDetail->Product->find('list');
		$productDetails = $this->ProductCategoryDetail->ProductDetail->find('list');
		$this->set(compact('products', 'productDetails'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product category detail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductCategoryDetail->delete($id)) {
			$this->Session->setFlash(__('Product category detail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product category detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function deleteit($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product category detail', true));
			$this->redirect(array('action'=>'index'));
		}
		//print_r($id);
		if ($this->ProductCategoryDetail->query("delete from product_category_details where product_id=$id ")) {
		//	$this->Session->setFlash(__('Product category detail deleted', true));
			$this->redirect(array('controller'=>'ProductHeads','action'=>'delete',$id));
		}
		$this->Session->setFlash(__('Product category detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	
	}

		function adddetail($id = null)
	{
	 if($id&&empty($this->data))
	 {
	    $this->set('productid',$id);  
	 }
	 if(!empty($this->data))
     {
	    $id=$this->data['ProductCategoryDetail']['product_id'];
	 	$i=1;
		for(;$i<=8;$i++)
		if(!empty($this->data['ProductCategoryDetail']['product_detail_id'.$i]))
		{
		foreach($this->data['ProductCategoryDetail']['product_detail_id'.$i] as $result)
		{$this->ProductCategoryDetail->create();
		$pcd=array('ProductCategoryDetail'=>array('product_id'=> $id,
		'product_detail_id'=>$result));
		$this->ProductCategoryDetail->save($pcd);
		}
		}				
	     $this->redirect(array('action'=>'addornot',$id));
	   
	   }		
	 	$products = $this->ProductCategoryDetail->Product->find('list');
		$productDetails = $this->ProductCategoryDetail->ProductDetail->find('list');
		$this->set(compact('products', 'productDetails'));
	 
	}
	  function deletedetails($id=null)
	  {
	    if (!$id) {
			$this->Session->setFlash(__('Invalid id for product category detail', true));
			$this->redirect(array('action'=>'index'));
		}
		else
		{
		 if($this->ProductCategoryDetail->query("delete from product_category_details where product_id=$id"))
		 {
		 
			$this->redirect(array('controller'=>'products','action'=>'delete',$id));
		}
		 
		
		
		}
		$this->Session->setFlash(__('Product category detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	  
	  
	  }
	
	function addornot($id=null)
	{
	 //print_r($id);
	 $this->set('id',$id);
	
	}
}