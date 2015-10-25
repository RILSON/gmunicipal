<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evidencias Controller
 *
 * @property \App\Model\Table\EvidenciasTable $Evidencias
 */
class EvidenciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoDesempenhos', 'Competencias', 'Cargos', 'Grupos']
        ];
        $this->set('evidencias', $this->paginate($this->Evidencias));
        $this->set('_serialize', ['evidencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidencia = $this->Evidencias->get($id, [
            'contain' => ['AvaliacaoDesempenhos', 'Competencias', 'Cargos', 'Grupos', 'AvaliacaoDesempenhoItens']
        ]);
        $this->set('evidencia', $evidencia);
        $this->set('_serialize', ['evidencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidencia = $this->Evidencias->newEntity();
        if ($this->request->is('post')) {
            $evidencia = $this->Evidencias->patchEntity($evidencia, $this->request->data);
            if ($this->Evidencias->save($evidencia)) {
                $this->Flash->success(__('The evidencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidencia could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->Evidencias->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $competencias = $this->Evidencias->Competencias->find('list', ['limit' => 200]);
        $cargos = $this->Evidencias->Cargos->find('list', ['limit' => 200]);
        $grupos = $this->Evidencias->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('evidencia', 'avaliacaoDesempenhos', 'competencias', 'cargos', 'grupos'));
        $this->set('_serialize', ['evidencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidencia = $this->Evidencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidencia = $this->Evidencias->patchEntity($evidencia, $this->request->data);
            if ($this->Evidencias->save($evidencia)) {
                $this->Flash->success(__('The evidencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidencia could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->Evidencias->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $competencias = $this->Evidencias->Competencias->find('list', ['limit' => 200]);
        $cargos = $this->Evidencias->Cargos->find('list', ['limit' => 200]);
        $grupos = $this->Evidencias->Grupos->find('list', ['limit' => 200]);
        $this->set(compact('evidencia', 'avaliacaoDesempenhos', 'competencias', 'cargos', 'grupos'));
        $this->set('_serialize', ['evidencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidencia = $this->Evidencias->get($id);
        if ($this->Evidencias->delete($evidencia)) {
            $this->Flash->success(__('The evidencia has been deleted.'));
        } else {
            $this->Flash->error(__('The evidencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
