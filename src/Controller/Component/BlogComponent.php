<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class BlogComponent extends Component{
    public function sayHello(){
        return 'hello';
    }

    public function getPosts()
    {
        $posts = [
            ['id' => 1, 'titulo' => 'Texto 1', 'texto' => 'Meu texto 1'],
            ['id' => 2, 'titulo' => 'Texto 2', 'texto' => 'Meu texto 2'],
            ['id' => 3, 'titulo' => 'Texto 3', 'texto' => 'Meu texto 3'],
        ];
        return $posts;
    }
}