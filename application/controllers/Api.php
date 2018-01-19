<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{
    function __construct()
     {
        parent::__construct();
    }

    function student_get(){
        $this->response('HEllo ');
    }
    function arraytest_get(){
        $data = array(
            '1' => array(
                '1' => 'name'  ,
                '2' => 'name2'
            ) ,
            '2' => 'name2'
        );

        $this->response($data);
    }

    public function news_get(){
        $this->load->model('news_model');
        $allnews = $this->news_model->get_all();
        $this->response(array($allnews));
    }
    public function test_post(){
        $this->load->model('test_model' , 'test');
//     die( $this->input->post('data'));

        $this->test->insert(array(
            'title' => $this->input->post('data')
//            'title' => 'Hello world'
        ));
        $this->response(json_encode(array(
            'Status' => true
        )));
    }
    public function test_put($id){
        $this->load->model('test_model' , 'test');
//        die( $this->put('data'));
        $this->test->update($id ,array('title' => $this->put('data')));
//        $this->test->update($id ,array('title' => 'Hello2 '));
    }

    public function test_delete($id){
        $this->load->model('test_model' , 'test');
        $this->test->delete($id);
    }
}