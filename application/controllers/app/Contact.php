<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $param = $_POST;
        $template = $this->load->view('template/email_contact', $param, true);
        // print_r($template); die;
        $this->load->library('email');

        $this->email->from("root@dennings.org", "Dennings");
        $this->email->to($_POST['email']);
        $this->email->subject("訊息回覆");
        $this->email->message($_POST['message']);

        $result = $this->email->send();
        // $result = mail('jason@gmail.com', 'TEST', 'message');
        // var_dump($result);

        echo \Jsnlib\output_status_comb_jsonp(null, "success", false,
        [
            'result' => $result
        ], true, false);
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */