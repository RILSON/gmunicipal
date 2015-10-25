<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MediaAvaliacoes Controller
 *
 * @property \App\Model\Table\MediaAvaliacoesTable $MediaAvaliacoes
 */
class MediaAvaliacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoDesempenhos', 'Usuarios', 'AvaliacaoAvaliadores']
        ];
        $this->set('mediaAvaliacoes', $this->paginate($this->MediaAvaliacoes));
        $this->set('_serialize', ['mediaAvaliacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Media Avaliaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mediaAvaliaco = $this->MediaAvaliacoes->get($id, [
            'contain' => ['AvaliacaoDesempenhos', 'Usuarios', 'AvaliacaoAvaliadores']
        ]);
        $this->set('mediaAvaliaco', $mediaAvaliaco);
        $this->set('_serialize', ['mediaAvaliaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mediaAvaliaco = $this->MediaAvaliacoes->newEntity();
        if ($this->request->is('post')) {
            $mediaAvaliaco = $this->MediaAvaliacoes->patchEntity($mediaAvaliaco, $this->request->data);
            if ($this->MediaAvaliacoes->save($mediaAvaliaco)) {
                $this->Flash->success(__('The media avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The media avaliaco could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->MediaAvaliacoes->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $usuarios = $this->MediaAvaliacoes->Usuarios->find('list', ['limit' => 200]);
        $avaliacaoAvaliadores = $this->MediaAvaliacoes->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $this->set(compact('mediaAvaliaco', 'avaliacaoDesempenhos', 'usuarios', 'avaliacaoAvaliadores'));
        $this->set('_serialize', ['mediaAvaliaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Media Avaliaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mediaAvaliaco = $this->MediaAvaliacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mediaAvaliaco = $this->MediaAvaliacoes->patchEntity($mediaAvaliaco, $this->request->data);
            if ($this->MediaAvaliacoes->save($mediaAvaliaco)) {
                $this->Flash->success(__('The media avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The media avaliaco could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->MediaAvaliacoes->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $usuarios = $this->MediaAvaliacoes->Usuarios->find('list', ['limit' => 200]);
        $avaliacaoAvaliadores = $this->MediaAvaliacoes->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $this->set(compact('mediaAvaliaco', 'avaliacaoDesempenhos', 'usuarios', 'avaliacaoAvaliadores'));
        $this->set('_serialize', ['mediaAvaliaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Media Avaliaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mediaAvaliaco = $this->MediaAvaliacoes->get($id);
        if ($this->MediaAvaliacoes->delete($mediaAvaliaco)) {
            $this->Flash->success(__('The media avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The media avaliaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
