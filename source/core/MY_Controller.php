<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        if ($this->uri->segment(1) !== 'admin') {
            $this->layout = new Layout(array('siteSide' => 'frontend','themeName' => 'main'));
        }
    }
}
