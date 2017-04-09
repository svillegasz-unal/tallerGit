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

    public function registrar($profesor) {
        $data = [
            'cedula' => $profesor['cedula'],
            'nombre' => $profesor['nombre'],
            'fecha_nacimiento' => $profesor['fecha_nacimiento'],
            'lugar_nacimiento' => $profesor['lugar_nacimiento'],
            'titulo' => $profesor['titulo'],
            'departamento' => $profesor['departamento'],
        ];

        if ($this->db->insert('profesor', $data) !== FALSE) {
            $this->id = $this->db->insert_id();
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
}
