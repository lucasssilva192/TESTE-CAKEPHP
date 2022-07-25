<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class Post extends Entity
{
    public $_accesible = [
        'id' => true,
        'title' => true,
        'body' => true,
        'category' => true,
        'author' => true,
        'created' => true,
        'modified' => true
    ];
}