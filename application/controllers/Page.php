<?php
defined("BASEPATH") OR exit("No direct script access allowed");

class Page extends MY_Controller {

    protected $assesbox;

    protected $js_environment = "min";

    function __construct()
    {
        parent::__construct();
        $this->assesbox = new \Assesbox;
    }

    public function index()
    {
        $this->assesbox->custom
        ([
            "css-home"           => "css/stylesheets/controller/frontend/home.css",
            "js-home-config"     => "appscript/{$this->js_environment}/config/home.js",
            "js-home-controller" => "appscript/{$this->js_environment}/controller/home/main.js",
        ]);

        $this->auoload("home", $param);
    }

    public function about()
    {
        $this->assesbox->custom
        ([
            "css-about"           => "css/stylesheets/controller/frontend/about.css",
            "js-about-config"     => "appscript/{$this->js_environment}/config/about.js",
            "js-about-controller" => "appscript/{$this->js_environment}/controller/about/main.js"
        ]);

        $this->auoload("about", $param);
    }

    public function products()
    {
        $this->assesbox->custom
        ([
            "css-products" => "css/stylesheets/controller/frontend/products.css",
            "js-products-config"     => "appscript/{$this->js_environment}/config/products.js",
            "js-products-controller" => "appscript/{$this->js_environment}/controller/products/main.js"
        ]);

        $this->auoload("products", $param);
    }

    public function services()
    {
        $this->assesbox->custom
        ([
            "css-services" => "css/stylesheets/controller/frontend/services.css",
            "js-services-config"     => "appscript/{$this->js_environment}/config/services.js",
            "js-services-controller" => "appscript/{$this->js_environment}/controller/services/main.js"
        ]);

        $this->auoload("services", $param);
    }

    public function careers()
    {
        $this->assesbox->custom
        ([
            "css-careers" => "css/stylesheets/controller/frontend/careers.css",
            "js-careers-config"     => "appscript/{$this->js_environment}/config/careers.js",
            "js-careers-controller" => "appscript/{$this->js_environment}/controller/careers/main.js"
        ]);
        
        $this->auoload("careers/main", $param);
    }

    // Privacy & Terms
    public function pt()
    {
        $this->assesbox->custom
        ([
            "css-pt" => "css/stylesheets/controller/frontend/pt.css",
            "js-pt-config"     => "appscript/{$this->js_environment}/config/pt.js",
            "js-pt-controller" => "appscript/{$this->js_environment}/controller/pt/main.js"
        ]);

        $this->auoload("pt/main", $param);
    }

    // 
    public function contact()
    {
        $this->assesbox->custom
        ([
            "contact" => "css/stylesheets/controller/frontend/contact.css",
            "js-contact-config"     => "appscript/{$this->js_environment}/config/contact.js",
            "js-contact-controller" => "appscript/{$this->js_environment}/controller/contact/main.js"
        ]);

        $this->auoload("contact", $param);
    }

    public function partners()
    {
        $this->assesbox->custom
        ([
            "partners" => "css/stylesheets/controller/frontend/partners.css",
            "js-partners-config"     => "appscript/{$this->js_environment}/config/partners.js",
            "js-partners-controller" => "appscript/{$this->js_environment}/controller/partners/main.js"
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
            "css-global-snippet"   => "css/stylesheets/model/snippet.css",
            "css-global-global"    => "css/stylesheets/controller/frontend/global.css",
            
            "js-require-requirejs" => "bower_components/requirejs/require.js",
            "js-global-libraries"  => "appscript/{$this->js_environment}/libraries/shimdeps.js",
            "js-global-config"     => "appscript/{$this->js_environment}/config/global.js",
            "js-global-controller" => "appscript/{$this->js_environment}/controller/global/main.js",

        ]);
        
        $this->assesbox->config(
        [
            "prefix" => "assesbox-",
            "map_path" => "assesmap"
        ]);

        $param->asset = $this->assesbox->start("\Jsnlib\Ao");

        $pa = $param->langkey;

        $this->load->view("frontend/header", $param);
        $this->load->view("frontend/{$view}", $param);
        $this->load->view("frontend/footer", $param);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */