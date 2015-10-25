<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModeloTipoAvaliacoes Controller
 *
 * @property \App\Model\Table\ModeloTipoAvaliacoesTable $ModeloTipoAvaliacoes
 */
class ModeloTipoAvaliacoesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ModeloAvaliacoes', 'TipoAvaliacoes']
        ];
        $this->set('modeloTipoAvaliacoes', $this->paginate($this->ModeloTipoAvaliacoes));
        $this->set('_serialize', ['modeloTipoAvaliacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Modelo Tipo Avaliaco id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->get($id, [
            'contain' => ['ModeloAvaliacoes', 'TipoAvaliacoes']
        ]);
        $this->set('modeloTipoAvaliaco', $modeloTipoAvaliaco);
        $this->set('_serialize', ['modeloTipoAvaliaco']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->newEntity();
        if ($this->request->is('post')) {
            $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->patchEntity($modeloTipoAvaliaco, $this->request->data);
            if ($this->ModeloTipoAvaliacoes->save($modeloTipoAvaliaco)) {
                $this->Flash->success(__('The modelo tipo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modelo tipo avaliaco could not be saved. Please, try again.'));
            }
        }
        $modeloAvaliacoes = $this->ModeloTipoAvaliacoes->ModeloAvaliacoes->find('list', ['limit' => 200]);
        $tipoAvaliacoes = $this->ModeloTipoAvaliacoes->TipoAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('modeloTipoAvaliaco', 'modeloAvaliacoes', 'tipoAvaliacoes'));
        $this->set('_serialize', ['modeloTipoAvaliaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modelo Tipo Avaliaco id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->patchEntity($modeloTipoAvaliaco, $this->request->data);
            if ($this->ModeloTipoAvaliacoes->save($modeloTipoAvaliaco)) {
                $this->Flash->success(__('The modelo tipo avaliaco has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The modelo tipo avaliaco could not be saved. Please, try again.'));
            }
        }
        $modeloAvaliacoes = $this->ModeloTipoAvaliacoes->ModeloAvaliacoes->find('list', ['limit' => 200]);
        $tipoAvaliacoes = $this->ModeloTipoAvaliacoes->TipoAvaliacoes->find('list', ['limit' => 200]);
        $this->set(compact('modeloTipoAvaliaco', 'modeloAvaliacoes', 'tipoAvaliacoes'));
        $this->set('_serialize', ['modeloTipoAvaliaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modelo Tipo Avaliaco id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modeloTipoAvaliaco = $this->ModeloTipoAvaliacoes->get($id);
        if ($this->ModeloTipoAvaliacoes->delete($modeloTipoAvaliaco)) {
            $this->Flash->success(__('The modelo tipo avaliaco has been deleted.'));
        } else {
            $this->Flash->error(__('The modelo tipo avaliaco could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
