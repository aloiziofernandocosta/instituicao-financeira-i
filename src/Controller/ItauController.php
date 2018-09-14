<?php
namespace App\Controller;

use Cake\Controller\Controller;

class ItauController extends Controller {

	public function home() {
        $this->viewBuilder()->layout('itau');
    }

	public function form() {
        $this->viewBuilder()->layout('itau');

    	$itau = $this->Itau->newEntity();
        $this->set(compact("itau"));
    }

    public function save() {
    	$this->viewBuilder()->layout('itau');

    	$itau = $this->Itau->newEntity();
        if ($this->request->is('post')) {
            $itau = $this->Itau->patchEntity($itau, $this->request->getData());
            if ($this->Itau->save($itau)) {
               
                return $this->redirect(['action' => 'saving']);
            }
            $this->Flash->error(__('Erro.'));
        }
        $this->set(compact($itau));
    }

    public function saving() {
    	$this->viewBuilder()->layout('itau');
    }

    public function dados() {
        $this->viewBuilder()->layout('itau');

        $dados = $this->Itau->find();

        $this->set(compact("dados"));
    }
}