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
$config['layoutParts'] = array('header','footer','leftSide','rightSide');

$config['leftSide']['scripts'] = array(
    array('src' => '/assets/js/admin/layout/main/leftSide.js'),
);
$config['leftSide']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/leftSide.css'),
);
$config['rightSide']['scripts'] = array(
    array('src' => '/assets/js/admin/layout/main/rightSide.js'),
);
$config['rightSide']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/rightSide.css'),
);
$config['header']['scripts'] = array(
    array('src' => '/assets/js/admin/layout/main/header.js'),
);
$config['header']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/header.css'),
);
$config['footer']['scripts'] = array(
    array('src' => '/assets/js/admin/layout/main/footer.js'),
);
$config['footer']['links'] = array(
    array('href' => '/assets/css/admin/layout/main/footer.css'),
);
