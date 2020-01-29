<?php
namespace App\Controller;

class LogoutController extends AppController
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Undocumented function
     *
     * @return \Cake\Http\Response|null ログアウト後にログインTOPに遷移する
     */
    public function index()
    {
        $this->Flash->success('ログアウトしました');

        return $this->redirect($this->Auth->logout());
    }
}
