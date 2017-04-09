<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   
*/
class Profesores extends CI_Controller
{

    #TODO caso de uso 1

    public function listar()
    {
        $this->load->model('Profesor');
        $profesores = $this->Profesor->get_all();
        $data = array();
        $data['title'] = 'Listar profesores';
        $data['profesores'] = $profesores;
        load_view('listar_profesores', $data);
    }

    #TODO caso de uso 3
    
}

?>