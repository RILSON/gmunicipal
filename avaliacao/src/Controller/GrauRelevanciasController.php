<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GrauRelevancias Controller
 *
 * @property \App\Model\Table\GrauRelevanciasTable $GrauRelevancias
 */
class GrauRelevanciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('grauRelevancias', $this->paginate($this->GrauRelevancias));
        $this->set('_serialize', ['grauRelevancias']);
    }

    /**
     * View method
     *
     * @param string|null $id Grau Relevancia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grauRelevancia = $this->GrauRelevancias->get($id, [
            'contain' => ['Competencias']
        ]);
        $this->set('grauRelevancia', $grauRelevancia);
        $this->set('_serialize', ['grauRelevancia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grauRelevancia = $this->GrauRelevancias->newEntity();
        if ($this->request->is('post')) {
            $grauRelevancia = $this->GrauRelevancias->patchEntity($grauRelevancia, $this->request->data);
            if ($this->GrauRelevancias->save($grauRelevancia)) {
                $this->Flash->success(__('The grau relevancia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grau relevancia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grauRelevancia'));
        $this->set('_serialize', ['grauRelevancia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grau Relevancia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grauRelevancia = $this->GrauRelevancias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grauRelevancia = $this->GrauRelevancias->patchEntity($grauRelevancia, $this->request->data);
            if ($this->GrauRelevancias->save($grauRelevancia)) {
                $this->Flash->success(__('The grau relevancia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grau relevancia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grauRelevancia'));
        $this->set('_serialize', ['grauRelevancia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grau Relevancia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grauRelevancia = $this->GrauRelevancias->get($id);
        if ($this->GrauRelevancias->delete($grauRelevancia)) {
            $this->Flash->success(__('The grau relevancia has been deleted.'));
        } else {
            $this->Flash->error(__('The grau relevancia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
