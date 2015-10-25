<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CriterioPontuacoes Controller
 *
 * @property \App\Model\Table\CriterioPontuacoesTable $CriterioPontuacoes
 */
class CriterioPontuacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Criterios']
        ];
        $this->set('criterioPontuacoes', $this->paginate($this->CriterioPontuacoes));
        $this->set('_serialize', ['criterioPontuacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Criterio Pontuaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $criterioPontuaco = $this->CriterioPontuacoes->get($id, [
            'contain' => ['Criterios']
        ]);
        $this->set('criterioPontuaco', $criterioPontuaco);
        $this->set('_serialize', ['criterioPontuaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $criterioPontuaco = $this->CriterioPontuacoes->newEntity();
        if ($this->request->is('post')) {
            $criterioPontuaco = $this->CriterioPontuacoes->patchEntity($criterioPontuaco, $this->request->data);
            if ($this->CriterioPontuacoes->save($criterioPontuaco)) {
                $this->Flash->success(__('The criterio pontuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio pontuaco could not be saved. Please, try again.'));
            }
        }
        $criterios = $this->CriterioPontuacoes->Criterios->find('list', ['limit' => 200]);
        $this->set(compact('criterioPontuaco', 'criterios'));
        $this->set('_serialize', ['criterioPontuaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Criterio Pontuaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $criterioPontuaco = $this->CriterioPontuacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $criterioPontuaco = $this->CriterioPontuacoes->patchEntity($criterioPontuaco, $this->request->data);
            if ($this->CriterioPontuacoes->save($criterioPontuaco)) {
                $this->Flash->success(__('The criterio pontuaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio pontuaco could not be saved. Please, try again.'));
            }
        }
        $criterios = $this->CriterioPontuacoes->Criterios->find('list', ['limit' => 200]);
        $this->set(compact('criterioPontuaco', 'criterios'));
        $this->set('_serialize', ['criterioPontuaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Criterio Pontuaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $criterioPontuaco = $this->CriterioPontuacoes->get($id);
        if ($this->CriterioPontuacoes->delete($criterioPontuaco)) {
            $this->Flash->success(__('The criterio pontuaco has been deleted.'));
        } else {
            $this->Flash->error(__('The criterio pontuaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
