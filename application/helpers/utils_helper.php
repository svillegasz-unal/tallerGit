<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
function load_view($view_name, $data)
{
    $instance = get_instance();
    $instance->load->view('base/header', $data);
    $instance->load->view('base/navbar', $data);
    $instance->load->view('content/'.$view_name, $data);
    $instance->load->view('base/footer', $data);
}
?>