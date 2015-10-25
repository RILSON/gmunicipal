<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cargos Controller
 *
 * @property \App\Model\Table\CargosTable $Cargos
 */
class CargosController extends AppController
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
        $this->set('cargos', $this->paginate($this->Cargos));
        $this->set('_serialize', ['cargos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cargo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cargo = $this->Cargos->get($id, [
            'contain' => ['Grupos', 'Evidencias', 'Usuarios']
        ]);
        $this->set('cargo', $cargo);
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cargo = $this->Cargos->newEntity();
        if ($this->request->is('post')) {
            $cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
            if ($this->Cargos->save($cargo)) {
                $this->Flash->success(__('The cargo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cargo could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Cargos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('cargo', 'grupos'));
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cargo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cargo = $this->Cargos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cargo = $this->Cargos->patchEntity($cargo, $this->request->data);
            if ($this->Cargos->save($cargo)) {
                $this->Flash->success(__('The cargo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cargo could not be saved. Please, try again.'));
            }
        }
        $grupos = $this->Cargos->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('cargo', 'grupos'));
        $this->set('_serialize', ['cargo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cargo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cargo = $this->Cargos->get($id);
        if ($this->Cargos->delete($cargo)) {
            $this->Flash->success(__('The cargo has been deleted.'));
        } else {
            $this->Flash->error(__('The cargo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
