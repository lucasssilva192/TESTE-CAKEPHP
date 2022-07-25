<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Post;

class PostsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

    } 

    public function index()
    {
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));
    }

    public function create()
    {
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));

        $post = new Post();

        if($this->request->is('post')){
            $post = $this->Posts->patchEntity($post, $this->request->getData());
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post criado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao salvar post'));
        }
        $this->set('post', $post);
    }

    public function view($id)
    {   
        $post = $this->Posts->get($id);
        $this->set('post', $post);
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));
    }

    public function edit($id)
    {   
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));

        $post =  $this->Posts->get($id);

        if($this->request->is(['post', 'put'])){
            $this->Posts->patchEntity($post, $this->request->getData());
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post atualizado com sucesso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro ao atualizar post'));
        }
        $this->set('post', $post);
    }

    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if($this->Posts->delete($post)){
            $this->Flash->success(__('Post deletado com sucesso'));
            return $this->redirect(['action' => 'index']);
        }
    }
}