<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AvaliacaoDesempenhoItens Controller
 *
 * @property \App\Model\Table\AvaliacaoDesempenhoItensTable $AvaliacaoDesempenhoItens
 */
class AvaliacaoDesempenhoItensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoAvaliadores', 'Evidencias', 'NivelProficiencias']
        ];
        $this->set('avaliacaoDesempenhoItens', $this->paginate($this->AvaliacaoDesempenhoItens));
        $this->set('_serialize', ['avaliacaoDesempenhoItens']);
    }

    /**
     * View method
     *
     * @param string|null $id Avaliacao Desempenho Iten id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->get($id, [
            'contain' => ['AvaliacaoAvaliadores', 'Evidencias', 'NivelProficiencias']
        ]);
        $this->set('avaliacaoDesempenhoIten', $avaliacaoDesempenhoIten);
        $this->set('_serialize', ['avaliacaoDesempenhoIten']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->newEntity();
        if ($this->request->is('post')) {
            $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->patchEntity($avaliacaoDesempenhoIten, $this->request->data);
            if ($this->AvaliacaoDesempenhoItens->save($avaliacaoDesempenhoIten)) {
                $this->Flash->success(__('The avaliacao desempenho iten has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao desempenho iten could not be saved. Please, try again.'));
            }
        }
        $avaliacaoAvaliadores = $this->AvaliacaoDesempenhoItens->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $evidencias = $this->AvaliacaoDesempenhoItens->Evidencias->find('list', ['limit' => 200]);
        $nivelProficiencias = $this->AvaliacaoDesempenhoItens->NivelProficiencias->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoDesempenhoIten', 'avaliacaoAvaliadores', 'evidencias', 'nivelProficiencias'));
        $this->set('_serialize', ['avaliacaoDesempenhoIten']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Avaliacao Desempenho Iten id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->patchEntity($avaliacaoDesempenhoIten, $this->request->data);
            if ($this->AvaliacaoDesempenhoItens->save($avaliacaoDesempenhoIten)) {
                $this->Flash->success(__('The avaliacao desempenho iten has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The avaliacao desempenho iten could not be saved. Please, try again.'));
            }
        }
        $avaliacaoAvaliadores = $this->AvaliacaoDesempenhoItens->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $evidencias = $this->AvaliacaoDesempenhoItens->Evidencias->find('list', ['limit' => 200]);
        $nivelProficiencias = $this->AvaliacaoDesempenhoItens->NivelProficiencias->find('list', ['limit' => 200]);
        $this->set(compact('avaliacaoDesempenhoIten', 'avaliacaoAvaliadores', 'evidencias', 'nivelProficiencias'));
        $this->set('_serialize', ['avaliacaoDesempenhoIten']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Avaliacao Desempenho Iten id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avaliacaoDesempenhoIten = $this->AvaliacaoDesempenhoItens->get($id);
        if ($this->AvaliacaoDesempenhoItens->delete($avaliacaoDesempenhoIten)) {
            $this->Flash->success(__('The avaliacao desempenho iten has been deleted.'));
        } else {
            $this->Flash->error(__('The avaliacao desempenho iten could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
