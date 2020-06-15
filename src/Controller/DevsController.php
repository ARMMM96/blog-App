<?php

namespace App\Controller;

use App\Controller\AppController;

class DevsController extends AppController
{
    private $posts;

    public function initialize()
    {
        $this->loadComponent('Devs');
    }
    public function index()
    {
        $posts = $this->loadModel('Posts')->find('all');
        $this->set(compact('posts'));
        $this->set('password', $this->Devs->generatePassword());
    }
}
