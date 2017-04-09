<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*   
*/
class Profesores extends CI_Controller
{

    public function registrar()
    {
        $titulos = array('Msc' => 'Msc', 'PhD' => 'PhD');
        $data = array('title' => 'Registro de profesores', 'titulos' => $titulos);
        load_view('registrar', $data);
    }

    public function submit()
    {
        $data = array();

        $this->load->library('form_validation');
        $this->form_validation->set_rules('inputCedula', 'Cedula', 'required|integer|max_length[12]');
        $this->form_validation->set_rules('inputNombre', 'Nombre', 'required|max_length[50]');        
        $this->form_validation->set_rules('inputFechaNacimiento', 'Fecha de Nacimiento', 'required|max_length[20]');
        $this->form_validation->set_rules('inputLugarNacimiento', 'Lugar de Nacimiento', 'required|max_length[20]');
        $this->form_validation->set_rules('inputTitulo', 'Titulo', 'required|in_list[Msc,PhD]');
        $this->form_validation->set_rules('inputDepartamento', 'Departamento', 'required|max_length[50]');

        if ($this->form_validation->run() == TRUE)
        {
            $profesor = array(
                'cedula' => $this->input->post('inputCedula'),
                'nombre' => $this->input->post('inputNombre'),
                'fecha_nacimiento' => $this->input->post('inputFechaNacimiento'),
                'lugar_nacimiento' => $this->input->post('inputLugarNacimiento'),
                'titulo' => $this->input->post('inputTitulo'),
                'departamento' => $this->input->post('inputDepartamento'),
            );

            $this->load->model('Profesor');
            $this->Profesor->registrar($profesor);
            $data['success'] = True;
        }
        $data['title'] = 'Registro de profesores';
        $titulos = array('Msc' => 'Msc', 'PhD' => 'PhD');
        $data['titulos'] = $titulos;
        load_view('registrar', $data);
    }

    #TODO caso de uso 2

    #TODO caso de uso 3
    
}

?>