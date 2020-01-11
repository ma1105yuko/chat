<?php
namespace App\Controller;

use App\Controller\AppController;

class ChatController extends AppController
{
    public $useTable = false;

    public $paginate = [
        'limit' => 100,
        'order' => ['created' => 'desc'],
        'contain' => ['Users'],
    ];

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');

        $this->loadModel('Messages');
        $this->loadModel('Users');

        $this->viewBuilder()->autoLayout(false);
    }

    public function index()
    {
　　　　 // メッセージ投稿機能
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
　　　　　
     　　// メッセージ表示機能
        $chatMessages = $this->paginate('Messages');

        $this->set(compact('chatMessages'));
    }

    public function add()
    {
    }
}
