<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('topic_model');
    }

    function index(){
        $this->_head();
        $this->load->view('main');
        $this->load->view('footer');
    }

    function _head(){
        $this->load->view('head');
        $topics = $this->topic_model->gets();
        $this->load->view('topic_list', array('topics'=>$topics));
    }

    function _footer(){
        $this->load->view('footer');
    }
}
?><?php
