<?php
class ProductsController extends AppController {

	var $name = 'Products';
 var $paginate = array(
    'limit' => 20);
	function index() {
	//echo $_SESSION['Auth']['User']['id'];
	  $result= $this->Product->Store->find('all',array('conditions'=>array('user_id'=>$_SESSION['Auth']['User']['id'])));
	
		$this->set('products', $result);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('controller'=>'ProductCategoryDetails','action' => 'adddetail',$this->Product->id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$stores = $this->Product->Store->find('list');
		$spieces = $this->Product->Spiece->find('list');
		$this->set(compact('stores', 'spieces'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
		 	if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$stores = $this->Product->Store->find('list');
		$spieces = $this->Product->Spiece->find('list');
		$this->set(compact('stores', 'spieces'));
	} 

	function delete($id = null) {
		if (!$id) {	
		$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'listall'));
		}	
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'listall'));
		}
		
		$this->Session->setFlash(__('Product was not deleted', true));
     	$this->redirect(array('action' => 'listall'));
	}
	function listall()
	{
	
	$this->set('data',$this->paginate('Product'));
	
	}


  function adminadd()
  {
  		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('controller'=>'ProductCategoryDetails','action' => 'adddetail',$this->Product->id));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
  }
   function find($id=null)
   {
   
   $options=$this->Product->ProductCategoryDetail->ProductDetail->ProductCategory->find("all",array('conditions'=>array('ProductCategory.id'=>2)));   
   print_r($options);
   
   
  
   }
 
	
}
