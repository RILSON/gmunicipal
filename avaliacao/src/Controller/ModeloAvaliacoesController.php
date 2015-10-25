<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModeloAvaliacoes Controller
 *
 * @property \App\Model\Table\ModeloAvaliacoesTable $ModeloAvaliacoes
 */
class ModeloAvaliacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('modeloAvaliacoes', $this->paginate($this->ModeloAvaliacoes));
        $this->set('_serialize', ['modeloAvaliacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Modelo Avaliaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modeloAvaliaco = $this->ModeloAvaliacoes->get($id, [
            'contain' => []
        ]);
        $this->set('modeloAvaliaco', $modeloAvaliaco);
        $this->set('_serialize', ['modeloAvaliaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modeloAvaliaco = $this->ModeloAvaliacoes->newEntity();
        if ($this->request->is('post')) {
            $modeloAvaliaco = $this->ModeloAvaliacoes->patchEntity($modeloAvaliaco, $this->request->data);
            if ($this->ModeloAvaliacoes->save($modeloAvaliaco)) {
                $this->Flash->success(__('The modelo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modelo avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('modeloAvaliaco'));
        $this->set('_serialize', ['modeloAvaliaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modelo Avaliaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modeloAvaliaco = $this->ModeloAvaliacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modeloAvaliaco = $this->ModeloAvaliacoes->patchEntity($modeloAvaliaco, $this->request->data);
            if ($this->ModeloAvaliacoes->save($modeloAvaliaco)) {
                $this->Flash->success(__('The modelo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modelo avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('modeloAvaliaco'));
        $this->set('_serialize', ['modeloAvaliaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modelo Avaliaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modeloAvaliaco = $this->ModeloAvaliacoes->get($id);
        if ($this->ModeloAvaliacoes->delete($modeloAvaliaco)) {
            $this->Flash->success(__('The modelo avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The modelo avaliaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
