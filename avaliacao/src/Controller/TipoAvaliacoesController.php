<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoAvaliacoes Controller
 *
 * @property \App\Model\Table\TipoAvaliacoesTable $TipoAvaliacoes
 */
class TipoAvaliacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tipoAvaliacoes', $this->paginate($this->TipoAvaliacoes));
        $this->set('_serialize', ['tipoAvaliacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Avaliaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoAvaliaco = $this->TipoAvaliacoes->get($id, [
            'contain' => []
        ]);
        $this->set('tipoAvaliaco', $tipoAvaliaco);
        $this->set('_serialize', ['tipoAvaliaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoAvaliaco = $this->TipoAvaliacoes->newEntity();
        if ($this->request->is('post')) {
            $tipoAvaliaco = $this->TipoAvaliacoes->patchEntity($tipoAvaliaco, $this->request->data);
            if ($this->TipoAvaliacoes->save($tipoAvaliaco)) {
                $this->Flash->success(__('The tipo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoAvaliaco'));
        $this->set('_serialize', ['tipoAvaliaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Avaliaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoAvaliaco = $this->TipoAvaliacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoAvaliaco = $this->TipoAvaliacoes->patchEntity($tipoAvaliaco, $this->request->data);
            if ($this->TipoAvaliacoes->save($tipoAvaliaco)) {
                $this->Flash->success(__('The tipo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo avaliaco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoAvaliaco'));
        $this->set('_serialize', ['tipoAvaliaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Avaliaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoAvaliaco = $this->TipoAvaliacoes->get($id);
        if ($this->TipoAvaliacoes->delete($tipoAvaliaco)) {
            $this->Flash->success(__('The tipo avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo avaliaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
