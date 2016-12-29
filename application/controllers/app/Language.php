<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function switch()
    {

        if (!in_array($_GET['lang'], ['zh', 'cn', 'english']))
            throw new Exception("沒有對應的語言: " . $_GET['lang']);
            
        $_SESSION['lang'] = $_GET['lang'];

        echo "1";
    }


}

/* End of file Language.php */
/* Location: ./application/controllers/app/Language.php */