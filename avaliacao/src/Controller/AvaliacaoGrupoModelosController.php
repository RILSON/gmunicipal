<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AvaliacaoGrupoModelos Controller
 *
 * @property \App\Model\Table\AvaliacaoGrupoModelosTable $AvaliacaoGrupoModelos
 */
class AvaliacaoGrupoModelosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoDesempenhos', 'Grupos', 'ModeloTipoAvaliacoes']
        ];
        $this->set('avaliacaoGrupoModelos', $this->paginate($this->AvaliacaoGrupoModelos));
        $this->set('_serialize', ['avaliacaoGrupoModelos']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao Grupo Modelo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->get($id, [
            'contain' => ['AvaliacaoDesempenhos', 'Grupos', 'ModeloTipoAvaliacoes', 'AvaliacaoAvaliadores']
        ]);
        $this->set('avaliacaoGrupoModelo', $avaliacaoGrupoModelo);
        $this->set('_serialize', ['avaliacaoGrupoModelo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->newEntity();
        if ($this->request->is('post')) {
            $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->patchEntity($avaliacaoGrupoModelo, $this->request->data);
            if ($this->AvaliacaoGrupoModelos->save($avaliacaoGrupoModelo)) {
                $this->Flash->success(__('The avaliacao grupo modelo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao grupo modelo could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->AvaliacaoGrupoModelos->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $grupos = $this->AvaliacaoGrupoModelos->Grupos->find('list', ['limit' => 200]);
        $modeloTipoAvaliacoes = $this->AvaliacaoGrupoModelos->ModeloTipoAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoGrupoModelo', 'avaliacaoDesempenhos', 'grupos', 'modeloTipoAvaliacoes'));
        $this->set('_serialize', ['avaliacaoGrupoModelo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao Grupo Modelo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->patchEntity($avaliacaoGrupoModelo, $this->request->data);
            if ($this->AvaliacaoGrupoModelos->save($avaliacaoGrupoModelo)) {
                $this->Flash->success(__('The avaliacao grupo modelo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao grupo modelo could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->AvaliacaoGrupoModelos->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $grupos = $this->AvaliacaoGrupoModelos->Grupos->find('list', ['limit' => 200]);
        $modeloTipoAvaliacoes = $this->AvaliacaoGrupoModelos->ModeloTipoAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoGrupoModelo', 'avaliacaoDesempenhos', 'grupos', 'modeloTipoAvaliacoes'));
        $this->set('_serialize', ['avaliacaoGrupoModelo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao Grupo Modelo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacaoGrupoModelo = $this->AvaliacaoGrupoModelos->get($id);
        if ($this->AvaliacaoGrupoModelos->delete($avaliacaoGrupoModelo)) {
            $this->Flash->success(__('The avaliacao grupo modelo has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao grupo modelo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
