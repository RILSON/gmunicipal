<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CriterioItens Controller
 *
 * @property \App\Model\Table\CriterioItensTable $CriterioItens
 */
class CriterioItensController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Criterios', 'CriterioPontuacoes', 'AvaliacaoAvaliadores']
        ];
        $this->set('criterioItens', $this->paginate($this->CriterioItens));
        $this->set('_serialize', ['criterioItens']);
    }

    /**
     * View method
     *
     * @param string|null $id Criterio Iten id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $criterioIten = $this->CriterioItens->get($id, [
            'contain' => ['Criterios', 'CriterioPontuacoes', 'AvaliacaoAvaliadores']
        ]);
        $this->set('criterioIten', $criterioIten);
        $this->set('_serialize', ['criterioIten']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $criterioIten = $this->CriterioItens->newEntity();
        if ($this->request->is('post')) {
            $criterioIten = $this->CriterioItens->patchEntity($criterioIten, $this->request->data);
            if ($this->CriterioItens->save($criterioIten)) {
                $this->Flash->success(__('The criterio iten has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio iten could not be saved. Please, try again.'));
            }
        }
        $criterios = $this->CriterioItens->Criterios->find('list', ['limit' => 200]);
        $criterioPontuacoes = $this->CriterioItens->CriterioPontuacoes->find('list', ['limit' => 200]);
        $avaliacaoAvaliadores = $this->CriterioItens->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $this->set(compact('criterioIten', 'criterios', 'criterioPontuacoes', 'avaliacaoAvaliadores'));
        $this->set('_serialize', ['criterioIten']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Criterio Iten id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $criterioIten = $this->CriterioItens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $criterioIten = $this->CriterioItens->patchEntity($criterioIten, $this->request->data);
            if ($this->CriterioItens->save($criterioIten)) {
                $this->Flash->success(__('The criterio iten has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The criterio iten could not be saved. Please, try again.'));
            }
        }
        $criterios = $this->CriterioItens->Criterios->find('list', ['limit' => 200]);
        $criterioPontuacoes = $this->CriterioItens->CriterioPontuacoes->find('list', ['limit' => 200]);
        $avaliacaoAvaliadores = $this->CriterioItens->AvaliacaoAvaliadores->find('list', ['limit' => 200]);
        $this->set(compact('criterioIten', 'criterios', 'criterioPontuacoes', 'avaliacaoAvaliadores'));
        $this->set('_serialize', ['criterioIten']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Criterio Iten id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $criterioIten = $this->CriterioItens->get($id);
        if ($this->CriterioItens->delete($criterioIten)) {
            $this->Flash->success(__('The criterio iten has been deleted.'));
        } else {
            $this->Flash->error(__('The criterio iten could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
