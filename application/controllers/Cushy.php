<?php
class Cushy extends CI_Controller {
    public function view($page = 'index') {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php'))
            show_404();

        // $data['title'] = ucfirst($page);

        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('templates/nav');
        // $this->load->view('pages/'.$page, $data);
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
    }
}