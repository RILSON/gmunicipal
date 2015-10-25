<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NivelProficiencias Controller
 *
 * @property \App\Model\Table\NivelProficienciasTable $NivelProficiencias
 */
class NivelProficienciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('nivelProficiencias', $this->paginate($this->NivelProficiencias));
        $this->set('_serialize', ['nivelProficiencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Nivel Proficiencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nivelProficiencia = $this->NivelProficiencias->get($id, [
            'contain' => ['AvaliacaoDesempenhoItens']
        ]);
        $this->set('nivelProficiencia', $nivelProficiencia);
        $this->set('_serialize', ['nivelProficiencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nivelProficiencia = $this->NivelProficiencias->newEntity();
        if ($this->request->is('post')) {
            $nivelProficiencia = $this->NivelProficiencias->patchEntity($nivelProficiencia, $this->request->data);
            if ($this->NivelProficiencias->save($nivelProficiencia)) {
                $this->Flash->success(__('The nivel proficiencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivel proficiencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivelProficiencia'));
        $this->set('_serialize', ['nivelProficiencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nivel Proficiencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nivelProficiencia = $this->NivelProficiencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nivelProficiencia = $this->NivelProficiencias->patchEntity($nivelProficiencia, $this->request->data);
            if ($this->NivelProficiencias->save($nivelProficiencia)) {
                $this->Flash->success(__('The nivel proficiencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The nivel proficiencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('nivelProficiencia'));
        $this->set('_serialize', ['nivelProficiencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nivel Proficiencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nivelProficiencia = $this->NivelProficiencias->get($id);
        if ($this->NivelProficiencias->delete($nivelProficiencia)) {
            $this->Flash->success(__('The nivel proficiencia has been deleted.'));
        } else {
            $this->Flash->error(__('The nivel proficiencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
