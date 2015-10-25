<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AvaliacaoDesempenhos Controller
 *
 * @property \App\Model\Table\AvaliacaoDesempenhosTable $AvaliacaoDesempenhos
 */
class AvaliacaoDesempenhosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['StatusAvaliacoes']
        ];
        $this->set('avaliacaoDesempenhos', $this->paginate($this->AvaliacaoDesempenhos));
        $this->set('_serialize', ['avaliacaoDesempenhos']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao Desempenho id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->get($id, [
            'contain' => ['StatusAvaliacoes', 'AvaliacaoGrupoModelos', 'Competencias', 'Emails', 'Evidencias', 'MediaAvaliacoes']
        ]);
        $this->set('avaliacaoDesempenho', $avaliacaoDesempenho);
        $this->set('_serialize', ['avaliacaoDesempenho']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->newEntity();
        if ($this->request->is('post')) {
            $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->patchEntity($avaliacaoDesempenho, $this->request->data);
            if ($this->AvaliacaoDesempenhos->save($avaliacaoDesempenho)) {
                $this->Flash->success(__('The avaliacao desempenho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao desempenho could not be saved. Please, try again.'));
            }
        }
        $statusAvaliacoes = $this->AvaliacaoDesempenhos->StatusAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoDesempenho', 'statusAvaliacoes'));
        $this->set('_serialize', ['avaliacaoDesempenho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao Desempenho id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->patchEntity($avaliacaoDesempenho, $this->request->data);
            if ($this->AvaliacaoDesempenhos->save($avaliacaoDesempenho)) {
                $this->Flash->success(__('The avaliacao desempenho has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao desempenho could not be saved. Please, try again.'));
            }
        }
        $statusAvaliacoes = $this->AvaliacaoDesempenhos->StatusAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoDesempenho', 'statusAvaliacoes'));
        $this->set('_serialize', ['avaliacaoDesempenho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao Desempenho id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacaoDesempenho = $this->AvaliacaoDesempenhos->get($id);
        if ($this->AvaliacaoDesempenhos->delete($avaliacaoDesempenho)) {
            $this->Flash->success(__('The avaliacao desempenho has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao desempenho could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
