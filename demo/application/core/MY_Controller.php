<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller {
    public  $user = false;
    function __construct() {
        parent::__construct();
        if ($this->uri->segment(1) !== 'admin') {
            $this->load->library('Layout',array('siteSide' => 'frontend','themeName' => 'main'));
            //$this->layout = new Layout(array('siteSide' => 'frontend','themeName' => 'main'));
        }else{
            $this->load->library('Layout',array('siteSide' => 'admin','themeName' => 'main'));
            //$this->layout = new Layout(array('siteSide' => 'admin','themeName' => 'main'));
        }
    }
}