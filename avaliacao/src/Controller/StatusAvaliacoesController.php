<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StatusAvaliacoes Controller
 *
 * @property \App\Model\Table\StatusAvaliacoesTable $StatusAvaliacoes
 */
class StatusAvaliacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('statusAvaliacoes', $this->paginate($this->StatusAvaliacoes));
        $this->set('_serialize', ['statusAvaliacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Status Avaliaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusAvaliaco = $this->StatusAvaliacoes->get($id, [
            'contain' => []
        ]);
        $this->set('statusAvaliaco', $statusAvaliaco);
        $this->set('_serialize', ['statusAvaliaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusAvaliaco = $this->StatusAvaliacoes->newEntity();
        if ($this->request->is('post')) {
            $statusAvaliaco = $this->StatusAvaliacoes->patchEntity($statusAvaliaco, $this->request->data);
            if ($this->StatusAvaliacoes->save($statusAvaliaco)) {
                $this->Flash->success(__('The status avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The status avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('statusAvaliaco'));
        $this->set('_serialize', ['statusAvaliaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Status Avaliaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusAvaliaco = $this->StatusAvaliacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusAvaliaco = $this->StatusAvaliacoes->patchEntity($statusAvaliaco, $this->request->data);
            if ($this->StatusAvaliacoes->save($statusAvaliaco)) {
                $this->Flash->success(__('The status avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The status avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('statusAvaliaco'));
        $this->set('_serialize', ['statusAvaliaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Status Avaliaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusAvaliaco = $this->StatusAvaliacoes->get($id);
        if ($this->StatusAvaliacoes->delete($statusAvaliaco)) {
            $this->Flash->success(__('The status avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The status avaliaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
