<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Send extends CI_Controller {

    function index() {
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "alfansyahfadlian@gmail.com";
        $config['smtp_pass'] = "fadlian17028";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);

        $ci->email->from('alfansyahfadlian@gmail.com', 'Your Name');
        $list = array('nanditama2000@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('Ramein Team Event Organization');
        $ci->email->message('You ordered a banner and a Pamphlet for your event. for other needs please reply to this email <br> Thank you');
        if ($this->email->send()) {
            echo 'Email sent.';
            redirect('Welcome/');
        } else {
            show_error($this->email->print_debugger());
        }
    }

}