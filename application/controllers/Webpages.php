<?php
class Webpages extends CI_Controller
{
    public function view($page = 'home'){
        if(!file_exists(APPPATH.'views/website/'.$page.'.php')){
            show_404();
        }
        $data['title'] = $page;
        $this->load->view('templates/header');
        $this->load->view('templates/navbar-web');
        $this->load->view('website/'.$page,$data);
        $this->load->view('templates/footer');
    }

    public function upcoming()
    {
 
    }

     public function latest()
    {

    }



}
