<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AvaliacaoAvaliadores Controller
 *
 * @property \App\Model\Table\AvaliacaoAvaliadoresTable $AvaliacaoAvaliadores
 */
class AvaliacaoAvaliadoresController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoGrupoModelos', 'Usuarios']
        ];
        $this->set('avaliacaoAvaliadores', $this->paginate($this->AvaliacaoAvaliadores));
        $this->set('_serialize', ['avaliacaoAvaliadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao Avaliadore id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->get($id, [
            'contain' => ['AvaliacaoGrupoModelos', 'Usuarios']
        ]);
        $this->set('avaliacaoAvaliadore', $avaliacaoAvaliadore);
        $this->set('_serialize', ['avaliacaoAvaliadore']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->newEntity();
        if ($this->request->is('post')) {
            $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->patchEntity($avaliacaoAvaliadore, $this->request->data);
            if ($this->AvaliacaoAvaliadores->save($avaliacaoAvaliadore)) {
                $this->Flash->success(__('The avaliacao avaliadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao avaliadore could not be saved. Please, try again.'));
            }
        }
        $avaliacaoGrupoModelos = $this->AvaliacaoAvaliadores->AvaliacaoGrupoModelos->find('list', ['limit' => 200]);
        $usuarios = $this->AvaliacaoAvaliadores->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoAvaliadore', 'avaliacaoGrupoModelos', 'usuarios'));
        $this->set('_serialize', ['avaliacaoAvaliadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao Avaliadore id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->patchEntity($avaliacaoAvaliadore, $this->request->data);
            if ($this->AvaliacaoAvaliadores->save($avaliacaoAvaliadore)) {
                $this->Flash->success(__('The avaliacao avaliadore has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao avaliadore could not be saved. Please, try again.'));
            }
        }
        $avaliacaoGrupoModelos = $this->AvaliacaoAvaliadores->AvaliacaoGrupoModelos->find('list', ['limit' => 200]);
        $usuarios = $this->AvaliacaoAvaliadores->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoAvaliadore', 'avaliacaoGrupoModelos', 'usuarios'));
        $this->set('_serialize', ['avaliacaoAvaliadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao Avaliadore id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacaoAvaliadore = $this->AvaliacaoAvaliadores->get($id);
        if ($this->AvaliacaoAvaliadores->delete($avaliacaoAvaliadore)) {
            $this->Flash->success(__('The avaliacao avaliadore has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao avaliadore could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
