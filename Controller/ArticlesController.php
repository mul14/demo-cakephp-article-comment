<?php

class ArticlesController extends AppController {
    
    public function index()   
    {
        $this->set('articles', $this->Article->find('all'));
    }
    
    public function view($id)
    {
        $this->set('article', $this->Article->findById($id));
    }
}