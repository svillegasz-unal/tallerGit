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

    public function mostrar()
    {
        $id_profesor = $this->uri->segment(3);
        $this->load->model('Profesor');
        $profesor = $this->Profesor->get_by_id($id_profesor);
        if (empty($profesor)) {
            show_404();
        }        
        $data = array();
        $data['title'] = 'Listar granjeros';
        $data['titulos'] = array('Msc' => 'Msc', 'PhD' => 'PhD');
        $data['profesor'] = $profesor[0];
        load_view('mostrar_profesor', $data);
    }

    public function actualizar()
    {
        $data = array();
        $this->load->model('Profesor');

        $this->load->library('form_validation');
        $this->form_validation->set_rules('inputCedula', 'Cedula', 'required|integer|max_length[50]'); 
        $this->form_validation->set_rules('inputNombre', 'Nombre', 'required|max_length[50]');        
        $this->form_validation->set_rules('inputFechaNacimiento', 'Fecha de Nacimiento', 'required|max_length[20]');
        $this->form_validation->set_rules('inputLugarNacimiento', 'Lugar de Nacimiento', 'required|max_length[20]');
        $this->form_validation->set_rules('inputTitulo', 'Titulo', 'required|in_list[Msc,PhD]');
        $this->form_validation->set_rules('inputDepartamento', 'Departamento', 'required|max_length[50]');

        $profesor = array(
            'cedula' => $this->input->post('inputCedula'),
            'nombre' => $this->input->post('inputNombre'),
            'fecha_nacimiento' => $this->input->post('inputFechaNacimiento'),
            'lugar_nacimiento' => $this->input->post('inputLugarNacimiento'),
            'titulo' => $this->input->post('inputTitulo'),
            'departamento' => $this->input->post('inputDepartamento'),
        );

        if ($this->form_validation->run() == TRUE)
        {            
            $this->Profesor->actualizar($profesor);
            $data['success'] = True;
        }

        $data['title'] = 'Registro de profesores';
        $titulos = array('Msc' => 'Msc', 'PhD' => 'PhD');
        $data['titulos'] = $titulos;
        $profesor = $this->Profesor->get_by_id($profesor['cedula']);
        $data['profesor'] = $profesor[0];
        load_view('mostrar_profesor', $data);
    }
    
}

?>