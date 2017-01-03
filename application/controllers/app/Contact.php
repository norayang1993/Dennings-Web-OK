<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if (empty($_POST['name']) or empty($_POST['email']) or empty($_POST['country']) or empty($_POST['phone']) or empty($_POST['theme']) or empty($_POST['message']))
        {
            echo \Jsnlib\output_status_comb_jsonp(null, "error", "Please fill out all required fields", null, true, false);
            die;
        }

        $this->load->library('email');
        $param    = $_POST;
        $template = $this->load->view('template/email_contact', $param, true);

        $this->email->initialize(
        [
            'protocol'  => 'smtp',
            'smtp_host' => 'box6120.bluehost.com',
            'smtp_user' => 'noreply@1scanner.com',
            'smtp_pass' => ']J}S#-d4P=/"(x|',
            'smtp_port' => '465',
            'smtp_crypto' => 'ssl',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'mailtype' => 'html'
        ]);

        $this->email->from($_POST['email']);
        $this->email->to("info@dennings.org");
        $this->email->subject("訊息回覆");
        $this->email->message($template);



        $result = $this->email->send();

        if ($result == false)
        {
            $result = $this->email->print_debugger();

            echo \Jsnlib\output_status_comb_jsonp(null, "error", false, $result, true, false);
            return true;
        }
        
        echo \Jsnlib\output_status_comb_jsonp(null, "success", false, null, true, false);
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */