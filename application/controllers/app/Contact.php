<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        echo \Jsnlib\output_status_comb_jsonp(null, "success", "", mull, true, false);
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */