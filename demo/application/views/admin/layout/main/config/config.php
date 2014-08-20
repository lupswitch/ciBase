<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['title'] = 'My Site';
$config['metas'] = array(
    array('charset' => 'utf-8')
);
$config['links'] = array(
    array('href' => '/assets/library/Bootstrap-3.1.1/css/bootstrap.min.css'),
);
$config['scripts'] = array(
    array('src' => '/assets/library/Jquery/jquery-2.1.1.min.js'),
    array('src' => '/assets/library/Bootstrap-3.1.1/js/bootstrap.min.js'),
);
$config['layoutParts'] = array('header','leftSide');

$config['leftSide']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/leftSide.css'),
);
$config['header']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/header.css'),
);

