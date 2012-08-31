<?php

class InventoriesController extends AppController{
    
    public $uses = array('Inventory');
    
    function index(){
        $inventory = $this->Inventory->find('all');
        $this->set('inventory', $inventory);
    }
    public function add() {
	if (!empty($this->data)) {
            $this->Inventory->create();
            if ($this->Inventory->save($this->data)) {
                $this->Session->setFlash('Your inventory has been saved.');
		$this->redirect(array('action' => 'index'));
	    }else {
		$this->Session->setFlash('Unable to add your inventory.');
	    }
	}
    }
    public function edit($id = null) {
        $this->Inventory->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Inventory->read();
        } else {
            if ($this->Inventory->save($this->request->data)) {
                $this->Session->setFlash('Your inventory has been updated.');
                $this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash('Unable to update your inventory.');
            }
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Inventory->delete($id)) {
            $this->Session->setFlash('Your inventory has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>