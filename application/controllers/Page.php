<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

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
            'css-products' => 'css/stylesheets/controller/frontend/products.css',
            'js-products-config'     => 'appscript/dev/config/products.js',
            'js-products-controller' => 'appscript/dev/controller/products/main.js'
        ]);

        $this->auoload("products", $param);
    }

    public function services()
    {
        $this->assesbox->custom
        ([
            'css-services' => 'css/stylesheets/controller/frontend/services.css',
            'js-services-config'     => 'appscript/dev/config/services.js',
            'js-services-controller' => 'appscript/dev/controller/services/main.js'
        ]);

        $this->auoload("services", $param);
    }

    public function careers()
    {
        $this->assesbox->custom
        ([
            'css-careers' => 'css/stylesheets/controller/frontend/careers.css',
            'js-careers-config'     => 'appscript/dev/config/careers.js',
            'js-careers-controller' => 'appscript/dev/controller/careers/main.js'
        ]);
        
        $this->auoload("careers/main", $param);
    }

    // Privacy & Terms
    public function pt()
    {
        $this->assesbox->custom
        ([
            'css-pt' => 'css/stylesheets/controller/frontend/pt.css',
            'js-pt-config'     => 'appscript/dev/config/pt.js',
            'js-pt-controller' => 'appscript/dev/controller/pt/main.js'
        ]);

        $this->auoload("pt/main", $param);
    }

    // 
    public function contact()
    {
        $this->assesbox->custom
        ([
            'contact' => 'css/stylesheets/controller/frontend/contact.css',
            'js-contact-config'     => 'appscript/dev/config/contact.js',
            'js-contact-controller' => 'appscript/dev/controller/contact/main.js'
        ]);

        $this->auoload("contact", $param);
    }

    public function partners()
    {
        $this->assesbox->custom
        ([
            'partners' => 'css/stylesheets/controller/frontend/partners.css',
            'js-partners-config'     => 'appscript/dev/config/partners.js',
            'js-partners-controller' => 'appscript/dev/controller/partners/main.js'
        ]);

        $this->auoload("partners", $param);
    }

    

    public function auoload($view, $param)
    {
        // unset($_SESSION['lang']);

        // 翻譯套件
        $param->translg = new \Jsnlib\Codeigniter\Translg;
        $param->langkey = empty($_SESSION['lang']) ? "english" : $_SESSION['lang'];

        $this->assesbox->glob
        ([
            'css-global-snippet'   => 'css/stylesheets/model/snippet.css',
            'css-global-global'    => 'css/stylesheets/controller/frontend/global.css',
            
            'js-require-requirejs' => 'bower_components/requirejs/require.js',
            'js-global-libraries'  => 'appscript/dev/libraries/shimdeps.js',
            'js-global-config'     => 'appscript/dev/config/global.js',
            'js-global-controller' => 'appscript/dev/controller/global/main.js',

        ]);
        
        $this->assesbox->config(
        [
            'prefix' => 'assesbox-',
            'map_path' => 'assesmap'
        ]);

        $param->asset = $this->assesbox->start('\Jsnlib\Ao');

        $pa = $param->langkey;

        $this->load->view('frontend/header', $param);
        $this->load->view("frontend/{$view}", $param);
        $this->load->view('frontend/footer', $param);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */