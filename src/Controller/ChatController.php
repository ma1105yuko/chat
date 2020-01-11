<?php
namespace App\Controller;

use App\Controller\AppController;

class ChatController extends AppController
{
    public function initialize()
    {
    }

    public function index()
    {
        $message = $this->Messages->newEntity();
        if ($this->request->is('post')) {
            $message = $this->Messages->patchEntity($message, $this->request->getData());
            $message->user_id = $this->Auth->user('id');
            if ($this->Messages->save($message)) {
                $this->Flash->success(__('メッセージを投稿しました'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('メッセージの投稿に失敗しました、もう一度お願いします'));
        }
        $users = $this->Messages->Users->find('list', ['limit' => 200]);
        $this->set(compact('message', 'users'));
    }

    public function add()
    {
    }
}
