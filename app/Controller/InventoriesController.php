<?php

class InventoriesController extends AppController{
    
    public $uses = array('Inventories');
    
    function index(){
        $inventories = $this->Inventories->find('all');
        $this->set('inventories', $inventories);
    }
    public function add() {
	if (!empty($this->data)) {
            $this->Inventories->create();
            if ($this->Inventories->save($this->data)) {
                $this->Session->setFlash('Your post has been saved.');
		$this->redirect(array('action' => 'index'));
	    }else {
		$this->Session->setFlash('Unable to add your post.');
	    }
	}
    }
    public function edit($id = null) {
        $this->Inventories->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Inventories->read();
        } else {
            if ($this->Inventories->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Inventories->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }
}

?>