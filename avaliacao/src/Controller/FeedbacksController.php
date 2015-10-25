<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feedbacks Controller
 *
 * @property \App\Model\Table\FeedbacksTable $Feedbacks
 */
class FeedbacksController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['MediaAvaliacoes', 'PrioridadeAcoes']
        ];
        $this->set('feedbacks', $this->paginate($this->Feedbacks));
        $this->set('_serialize', ['feedbacks']);
    }

    /**
     * View method
     *
     * @param string|null $id Feedback id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feedback = $this->Feedbacks->get($id, [
            'contain' => ['MediaAvaliacoes', 'PrioridadeAcoes']
        ]);
        $this->set('feedback', $feedback);
        $this->set('_serialize', ['feedback']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feedback = $this->Feedbacks->newEntity();
        if ($this->request->is('post')) {
            $feedback = $this->Feedbacks->patchEntity($feedback, $this->request->data);
            if ($this->Feedbacks->save($feedback)) {
                $this->Flash->success(__('The feedback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feedback could not be saved. Please, try again.'));
            }
        }
        $mediaAvaliacoes = $this->Feedbacks->MediaAvaliacoes->find('list', ['limit' => 200]);
        $prioridadeAcoes = $this->Feedbacks->PrioridadeAcoes->find('list', ['limit' => 200]);
        $this->set(compact('feedback', 'mediaAvaliacoes', 'prioridadeAcoes'));
        $this->set('_serialize', ['feedback']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Feedback id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedback = $this->Feedbacks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedback = $this->Feedbacks->patchEntity($feedback, $this->request->data);
            if ($this->Feedbacks->save($feedback)) {
                $this->Flash->success(__('The feedback has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The feedback could not be saved. Please, try again.'));
            }
        }
        $mediaAvaliacoes = $this->Feedbacks->MediaAvaliacoes->find('list', ['limit' => 200]);
        $prioridadeAcoes = $this->Feedbacks->PrioridadeAcoes->find('list', ['limit' => 200]);
        $this->set(compact('feedback', 'mediaAvaliacoes', 'prioridadeAcoes'));
        $this->set('_serialize', ['feedback']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Feedback id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedback = $this->Feedbacks->get($id);
        if ($this->Feedbacks->delete($feedback)) {
            $this->Flash->success(__('The feedback has been deleted.'));
        } else {
            $this->Flash->error(__('The feedback could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
