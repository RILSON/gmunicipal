<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PrioridadeAcoes Controller
 *
 * @property \App\Model\Table\PrioridadeAcoesTable $PrioridadeAcoes
 */
class PrioridadeAcoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('prioridadeAcoes', $this->paginate($this->PrioridadeAcoes));
        $this->set('_serialize', ['prioridadeAcoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Prioridade Aco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prioridadeAco = $this->PrioridadeAcoes->get($id, [
            'contain' => []
        ]);
        $this->set('prioridadeAco', $prioridadeAco);
        $this->set('_serialize', ['prioridadeAco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prioridadeAco = $this->PrioridadeAcoes->newEntity();
        if ($this->request->is('post')) {
            $prioridadeAco = $this->PrioridadeAcoes->patchEntity($prioridadeAco, $this->request->data);
            if ($this->PrioridadeAcoes->save($prioridadeAco)) {
                $this->Flash->success(__('The prioridade aco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prioridade aco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prioridadeAco'));
        $this->set('_serialize', ['prioridadeAco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prioridade Aco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prioridadeAco = $this->PrioridadeAcoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prioridadeAco = $this->PrioridadeAcoes->patchEntity($prioridadeAco, $this->request->data);
            if ($this->PrioridadeAcoes->save($prioridadeAco)) {
                $this->Flash->success(__('The prioridade aco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prioridade aco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('prioridadeAco'));
        $this->set('_serialize', ['prioridadeAco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prioridade Aco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prioridadeAco = $this->PrioridadeAcoes->get($id);
        if ($this->PrioridadeAcoes->delete($prioridadeAco)) {
            $this->Flash->success(__('The prioridade aco has been deleted.'));
        } else {
            $this->Flash->error(__('The prioridade aco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
