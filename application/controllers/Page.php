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
            'css-home'           => 'css/stylesheets/controller/frontend/home.css',
            'js-home-config'     => 'appscript/dev/config/home.js',
            'js-home-controller' => 'appscript/dev/controller/home/main.js',
        ]);

        $this->auoload("home", $param);
    }

    public function about()
    {
        $this->assesbox->custom
        ([
            'css-about'           => 'css/stylesheets/controller/frontend/about.css',
            'js-about-config'     => 'appscript/dev/config/about.js',
            'js-about-controller' => 'appscript/dev/controller/about/main.js'
        ]);

        $this->auoload("about", $param);
    }

    public function products()
    {
        $this->assesbox->custom
        ([
            'products' => 'css/stylesheets/controller/frontend/products.css'
        ]);

        $this->auoload("products", $param);
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

    public function partners()
    {
        $this->assesbox->custom
        ([
            'partners' => 'css/stylesheets/controller/frontend/partners.css'
        ]);

        $this->auoload("partners", $param);
    }

    

    public function auoload($view, $param)
    {
        $this->assesbox->glob
        ([
            'css-global-snippet'   => 'css/stylesheets/model/snippet.css',
            'css-global-global'    => 'css/stylesheets/controller/frontend/global.css',
            
            'js-require-requirejs' => 'bower_components/requirejs/require.js',
            'js-global-config'     => 'appscript/dev/config/global.js',
            'js-global-libraries'  => 'appscript/dev/libraries/shimdeps.js',
            'js-global-controller' => 'appscript/dev/controller/global/main.js',

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