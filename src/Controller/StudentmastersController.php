<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Studentmasters Controller
 *
 * @property \App\Model\Table\StudentmastersTable $Studentmasters
 * @method \App\Model\Entity\Studentmaster[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentmastersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $studentmasters = $this->paginate($this->Studentmasters);

        $this->set(compact('studentmasters'));
    }

    /**
     * View method
     *
     * @param string|null $id Studentmaster id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentmaster = $this->Studentmasters->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('studentmaster'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentmaster = $this->Studentmasters->newEmptyEntity();
        if ($this->request->is('post')) {
            $studentmaster = $this->Studentmasters->patchEntity($studentmaster, $this->request->getData());
            if ($this->Studentmasters->save($studentmaster)) {
                $this->Flash->success(__('The studentmaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studentmaster could not be saved. Please, try again.'));
        }
        $this->set(compact('studentmaster'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Studentmaster id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentmaster = $this->Studentmasters->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentmaster = $this->Studentmasters->patchEntity($studentmaster, $this->request->getData());
            if ($this->Studentmasters->save($studentmaster)) {
                $this->Flash->success(__('The studentmaster has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The studentmaster could not be saved. Please, try again.'));
        }
        $this->set(compact('studentmaster'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Studentmaster id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentmaster = $this->Studentmasters->get($id);
        if ($this->Studentmasters->delete($studentmaster)) {
            $this->Flash->success(__('The studentmaster has been deleted.'));
        } else {
            $this->Flash->error(__('The studentmaster could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
