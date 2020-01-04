<?php
namespace App\Controller;

class LoginController extends AppController
{
    /**
     * Undocumented function
     *
     * @return \Cake\Http\Response|null ログイン成功後にログインTOPに遷移する
     */
    public function index()
    {
        $this->viewBuilder()->autoLayout(false);

        if ($this->Auth->isAuthorized()) {
            return $this->redirect($this->Auth->redirectUrl());
        }

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('ユーザー名またはパスワードが不正です');
        }
    }
}
