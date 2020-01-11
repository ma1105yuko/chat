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
        $chatMessages = $this->paginate('Messages');

        $this->set(compact('chatMessages'));
    }

    public function add()
    {
    }
}
