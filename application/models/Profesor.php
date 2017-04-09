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

}
