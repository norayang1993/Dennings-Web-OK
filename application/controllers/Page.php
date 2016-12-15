<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    protected $assesbox;

    function __construct()
    {
        parent::__construct();
        $this->assesbox = new \Assesbox;
    }

    public function index()
    {
        $this->assesbox->custom
        ([
            'services' => 'css/stylesheets/controller/frontend/home.css'
        ]);

        $this->auoload("home", $param);
    }

    public function services()
    {
        $this->assesbox->custom
        ([
            'services' => 'css/stylesheets/controller/frontend/services.css'
        ]);

        $this->auoload("services", $param);
    }

    public function careers()
    {
        $this->assesbox->custom
        ([
            'careers' => 'css/stylesheets/controller/frontend/careers.css'
        ]);
        
        $this->auoload("careers", $param);
    }

    // Privacy & Terms
    public function pt()
    {
        $this->assesbox->custom
        ([
            'pt' => 'css/stylesheets/controller/frontend/pt.css'
        ]);

        $this->auoload("pt", $param);
    }

    public function contact()
    {
        $this->assesbox->custom
        ([
            'contact' => 'css/stylesheets/controller/frontend/contact.css'
        ]);

        $this->auoload("contact", $param);
    }

    

    public function auoload($view, $param)
    {
        $this->assesbox->glob
        ([
            'snippet' => 'css/stylesheets/model/snippet.css',
            'global' => 'css/stylesheets/controller/frontend/global.css',
        ]);
        $this->assesbox->config(
        [
            'prefix' => 'assesbox-',
            'map_path' => 'assesmap'
        ]);

        $param->asset = $this->assesbox->start('\Jsnlib\Ao');

        $this->load->view('frontend/header', $param);
        $this->load->view("frontend/{$view}", $param);
        $this->load->view('frontend/footer', $param);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */