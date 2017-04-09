<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Model {

    private $cedula;
    private $nombre;
    private $fecha_nacimiento;
    private $lugar_nacimiento;
    private $titulo;
    private $departamento;

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all(){
        $query = $this->db->get('profesor');
        return $query->result();
    }

    public function get_by_id($id_profesor){
        $query = $this->db->get_where('profesor', array('cedula' => $id_profesor));
        return $query->result();   
    }

    public function actualizar($profesor) {
        $data = [
            'nombre' => $profesor['nombre'],
            'fecha_nacimiento' => $profesor['fecha_nacimiento'],
            'lugar_nacimiento' => $profesor['lugar_nacimiento'],
            'titulo' => $profesor['titulo'],
            'departamento' => $profesor['departamento'],
        ];


        $this->db->update('profesor', $data, array('cedula' => $profesor['cedula']));
    }
}
