<?php
class ProductPicsController extends AppController {

	var $name = 'ProductPics';
  var $uses=array('ProductPic','ProductHead');
	function index() {
		$this->ProductPic->recursive = 0;
		$this->set('productPics', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product pic', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('productPic', $this->ProductPic->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProductPic->create();
			if ($this->ProductPic->save($this->data)) {
				$this->Session->setFlash(__('The product pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product pic could not be saved. Please, try again.', true));
			}
		}
		$products = $this->ProductPic->Product->find('list');
		$positions = $this->ProductPic->Position->find('list');
		$this->set(compact('products', 'positions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product pic', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProductPic->save($this->data)) {
				$this->Session->setFlash(__('The product pic has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product pic could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProductPic->read(null, $id);
		}
		$products = $this->ProductPic->Product->find('list');
		$positions = $this->ProductPic->Position->find('list');
		$this->set(compact('products', 'positions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product pic', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProductHead->query("delete from product_pics where product_id=$id")) {
			$this->Session->setFlash(__('Product pic deleted', true));
			$this->redirect(array('controller'=>'Products','action'=>'delete',$id));
		}
		$this->Session->setFlash(__('Product pic was not deleted', true));
	$this->redirect(array('controller'=>'Products','action'=>'delete',$id));
		}
	     
	function addnew($id=null) {
   $this->set('id',$id);    
	if (!empty($this->data)) {
			
			$this->ProductHead->create();
			$ph=array('ProductHead'=>array('product_id'=> $this->data['ProductPic']['product_id'],
		   'src'=>$this->data['ProductPic']['head']));
			@$this->ProductHead->save($ph);
	
	foreach($this->data['ProductPic']['src'] as $result)
			{
			if($result['name']!="")
			{$this->ProductPic->create();
			$pcd=array('ProductPic'=>array('product_id'=> $this->data['ProductPic']['product_id'],
		   'position_id'=>$this->data['ProductPic']['position_id'],'src'=>$result));
		   $this->ProductPic->save($pcd);
			}
			}
		$this->redirect(array('controller'=>'products','action' => 'listall'));
			} else {
				$this->Session->setFlash(__('The product pic could not be saved. Please, try again.', true));
			}
		
		$products = $this->ProductPic->Product->find('list');
		$positions = $this->ProductPic->Position->find('list');
		$this->set(compact('products', 'positions'));
	}
   function deleteone($id=null)
   {
     //$this->
   
   
   
   }
   
}