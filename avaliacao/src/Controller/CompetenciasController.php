<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competencias Controller
 *
 * @property \App\Model\Table\CompetenciasTable $Competencias
 */
class CompetenciasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AvaliacaoDesempenhos', 'TipoCompetencias', 'GrauRelevancias']
        ];
        $this->set('competencias', $this->paginate($this->Competencias));
        $this->set('_serialize', ['competencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Competencia id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competencia = $this->Competencias->get($id, [
            'contain' => ['AvaliacaoDesempenhos', 'TipoCompetencias', 'GrauRelevancias', 'Evidencias']
        ]);
        $this->set('competencia', $competencia);
        $this->set('_serialize', ['competencia']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competencia = $this->Competencias->newEntity();
        if ($this->request->is('post')) {
            $competencia = $this->Competencias->patchEntity($competencia, $this->request->data);
            if ($this->Competencias->save($competencia)) {
                $this->Flash->success(__('The competencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competencia could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->Competencias->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $tipoCompetencias = $this->Competencias->TipoCompetencias->find('list', ['limit' => 200]);
        $grauRelevancias = $this->Competencias->GrauRelevancias->find('list', ['limit' => 200]);
        $this->set(compact('competencia', 'avaliacaoDesempenhos', 'tipoCompetencias', 'grauRelevancias'));
        $this->set('_serialize', ['competencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Competencia id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competencia = $this->Competencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competencia = $this->Competencias->patchEntity($competencia, $this->request->data);
            if ($this->Competencias->save($competencia)) {
                $this->Flash->success(__('The competencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The competencia could not be saved. Please, try again.'));
            }
        }
        $avaliacaoDesempenhos = $this->Competencias->AvaliacaoDesempenhos->find('list', ['limit' => 200]);
        $tipoCompetencias = $this->Competencias->TipoCompetencias->find('list', ['limit' => 200]);
        $grauRelevancias = $this->Competencias->GrauRelevancias->find('list', ['limit' => 200]);
        $this->set(compact('competencia', 'avaliacaoDesempenhos', 'tipoCompetencias', 'grauRelevancias'));
        $this->set('_serialize', ['competencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Competencia id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competencia = $this->Competencias->get($id);
        if ($this->Competencias->delete($competencia)) {
            $this->Flash->success(__('The competencia has been deleted.'));
        } else {
            $this->Flash->error(__('The competencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
