<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_controller extends CI_Controller {
    function __construct() {
		parent:: __construct();
		$this->load->helper('form');
		$this->load->model('productos_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
        $data["producto"] = $this->productos_model->mostrar_producto();
        $data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
        $data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
        $data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
        $data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
        $data['rightbar'] = $this->load->view('Layouts/rightbar', NULL, TRUE);
        $this->load->view('productos',$data);
    }

        public function nuevo_producto(){
            $data['css'] = $this->load->view('Layouts/css', NULL, TRUE);
            $data['scripts'] = $this->load->view('Layouts/scripts', NULL, TRUE);
            $data['header'] = $this->load->view('Layouts/header', NULL, TRUE);
            $data['footer'] = $this->load->view('Layouts/footer', NULL,TRUE);
            $data['rightbar'] = $this->load->view('Layouts/rightbar', NULL, TRUE);
            $this->load->view('nuevoProducto',$data);
        }

        public function guardar_consultorio() {
            $data['nombre_producto']=$_POST["consultorio"];
            $this->consultorio_model->insertar($data);
     
           redirect('/consultorios_controller/');
        }

    public function eliminar_producto() {
        $id_producto = $_REQUEST["id_producto"];
        $this->consultorio_model->delete_producto($id_producto);
       redirect('/productos_controller/');
    }
    
}