<?php
namespace App\Controller;

use Cake\Controller\Controller;

class SantanderController extends Controller {

	public function home() {
        $this->viewBuilder()->layout('santander');
    }

	public function form() {
        $this->viewBuilder()->layout('santander');

    	$santander = $this->Santander->newEntity();
        $this->set(compact("santander"));
    }

    public function save() {
    	$this->viewBuilder()->layout('santander');

    	$santander = $this->Santander->newEntity();
        if ($this->request->is('post')) {
            $santander = $this->Santander->patchEntity($santander, $this->request->getData());
            if ($this->Santander->save($santander)) {
               
                return $this->redirect(['action' => 'file', $santander->cliente_id]);
            }
            $this->Flash->error(__('Erro.'));
        }
        $this->set(compact("santander"));
    }

    public function file($id) {
		$this->viewBuilder()->layout('santander');
    	$santander = $this->Santander->get($id);
    	if (!empty($this->request->data['arquivo'])) {
    	
    		$type = explode(".", $this->request->data['arquivo']['name'])[1];
            $santander->arquivo = date("Y-m-d")."_".rand().".".$type;
            if ($this->Santander->save($santander) && move_uploaded_file($this->request->data['arquivo']['tmp_name'], WWW_ROOT . 'files' .DS. $santander->arquivo)) {
               
                return $this->redirect(['action' => 'saving']);
            }
            $this->Flash->error(__('Erro.'));
        }

        $this->set(compact("santander"));
    }

    public function saving() {
    	$this->viewBuilder()->layout('santander');
    }

     public function dados() {
        $this->viewBuilder()->layout('santander');

        $dados = $this->Santander->find();

        $this->set(compact("dados"));
    }
}