<?php

namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController
{
    private $posts;

    public function initilize() : void
    {
        $this->loadComponent('Devs');
    }

    public function index()
    {
        $posts = $this->Posts->find()->all();
        $this->set(compact('posts'));
    }
}
