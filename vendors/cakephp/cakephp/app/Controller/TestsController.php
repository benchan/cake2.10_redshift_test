<?php
App::uses('AppController', 'Controller');

class TestsController extends AppController {

    public function index(){
        $this->c = ClassRegistry::init('CustomerHistory');
        $res = $this->c->query('select * from customer_histories limit 10;');
        $this->autoRender = null;

        print_r($res);
    }
}
