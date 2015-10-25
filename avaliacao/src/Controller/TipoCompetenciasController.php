<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoCompetencias Controller
 *
 * @property \App\Model\Table\TipoCompetenciasTable $TipoCompetencias
 */
class TipoCompetenciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('tipoCompetencias', $this->paginate($this->TipoCompetencias));
        $this->set('_serialize', ['tipoCompetencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Competencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoCompetencia = $this->TipoCompetencias->get($id, [
            'contain' => ['Competencias']
        ]);
        $this->set('tipoCompetencia', $tipoCompetencia);
        $this->set('_serialize', ['tipoCompetencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoCompetencia = $this->TipoCompetencias->newEntity();
        if ($this->request->is('post')) {
            $tipoCompetencia = $this->TipoCompetencias->patchEntity($tipoCompetencia, $this->request->data);
            if ($this->TipoCompetencias->save($tipoCompetencia)) {
                $this->Flash->success(__('The tipo competencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo competencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoCompetencia'));
        $this->set('_serialize', ['tipoCompetencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Competencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoCompetencia = $this->TipoCompetencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoCompetencia = $this->TipoCompetencias->patchEntity($tipoCompetencia, $this->request->data);
            if ($this->TipoCompetencias->save($tipoCompetencia)) {
                $this->Flash->success(__('The tipo competencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo competencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoCompetencia'));
        $this->set('_serialize', ['tipoCompetencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Competencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoCompetencia = $this->TipoCompetencias->get($id);
        if ($this->TipoCompetencias->delete($tipoCompetencia)) {
            $this->Flash->success(__('The tipo competencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo competencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
