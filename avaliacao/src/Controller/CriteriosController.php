<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Criterios Controller
 *
 * @property \App\Model\Table\CriteriosTable $Criterios
 */
class CriteriosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grupos']
        ];
        $this->set('criterios', $this->paginate($this->Criterios));
        $this->set('_serialize', ['criterios']);
    }

    /**
     * View method
     *
     * @param string|null $id Criterio id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $criterio = $this->Criterios->get($id, [
            'contain' => ['Grupos', 'CriterioItens', 'CriterioPontuacoes']
        ]);
        $this->set('criterio', $criterio);
        $this->set('_serialize', ['criterio']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $criterio = $this->Criterios->newEntity();
        if ($this->request->is('post')) {
            $criterio = $this->Criterios->patchEntity($criterio, $this->request->data);
            if ($this->Criterios->save($criterio)) {
                $this->Flash->success(__('The criterio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Criterios->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('criterio', 'grupos'));
        $this->set('_serialize', ['criterio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Criterio id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $criterio = $this->Criterios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $criterio = $this->Criterios->patchEntity($criterio, $this->request->data);
            if ($this->Criterios->save($criterio)) {
                $this->Flash->success(__('The criterio has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Criterios->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('criterio', 'grupos'));
        $this->set('_serialize', ['criterio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Criterio id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $criterio = $this->Criterios->get($id);
        if ($this->Criterios->delete($criterio)) {
            $this->Flash->success(__('The criterio has been deleted.'));
        } else {
            $this->Flash->error(__('The criterio could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
