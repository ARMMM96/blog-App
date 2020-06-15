<?php

namespace App\Controller;


use App\Controller\AppController;


class PostsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }
    public function index()
    {
        $posts = $this->Posts->find('all', array('order' => array('created' => 'desc')));
        $this->set(compact('posts'));
    }

    public function create()
    {

        // Get Posts for Sidebar
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));

        $post = $this->Posts->newEntity();

        if ($this->request->is('post')) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success((__('Post Created')));
                return $this->redirect((['action' => 'index']));
            }
            $this->Flash->error(__('Unable to save post'));
        }
        $this->set('post', $post);
    }

    public function view($id)
    {
        $posts = $this->Posts->find('all');
        $post = $this->Posts->get($id);
        $this->set(compact('posts', 'post'));
    }
    public function edit($id)
    {
        // Get Posts for Sidebar
        $posts = $this->Posts->find('all');
        $this->set(compact('posts'));

        $post = $this->Posts->get($id);

        if ($this->request->is(['post', 'put'])) {
            $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success((__('Post Upated')));
                return $this->redirect((['action' => 'index']));
            }
            $this->Flash->error(__('Unable to update post'));
        }
        $this->set('post', $post);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success(__('Post Deleted'));
            return $this->redirect(['action' => 'index']);
        }
    }
}
