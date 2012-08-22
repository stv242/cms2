<?php

/**
 * test controller
 */
class Pages extends CI_Controller {
    
    function __Construct() {
        parent::__Construct();
		$this->load->model('PageModel');
		$this->load->helper('url');
        $this->load->helper('form');
    }
    
    function index(){
        $data['title'] = 'Pages List';
        $data['pages'] = $this->PageModel->fetchAllRows('pages');
        $this->load->view('page_view', $data);
    }
    
    function contents(){
        $data['title'] = 'Content List';
        $data['contents'] = $this->PageModel->fetchRow($this->uri->segment(3), 'page_id', 'content');
        $this->load->view('content_view', $data);
    }
    
    function insert_content(){
        $this->PageModel->insertRow('content', $_POST);
        redirect('pages/contents/'.$_POST['page_id']);
    }
}

?>