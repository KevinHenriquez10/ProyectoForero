<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_admin extends CI_Controller {
	//CONSTRUCTOR
	function __construct(){
		parent::__construct();	
		$this->load->model('admin');
		$this->load->model('utiles');	
		$this->load->helper(array('load_styles', 'load_scripts', 'load_assets', 'url'));		
		$this->load->library(array('form_validation', 'session', 'encrypt', 'Layout'));

		if($this->session->userdata('admin') != 1){
			echo "No tienes permiso para estar en este sitio!";
			exit;
		}
	}
	
	public function dashboard()	{
		$this->layout->setLayout("admin");
		$this->layout->setTitle("Dashboard");		
		$this->layout->view("admin/dashboard");
	}

	public function noticias() {
		$this->layout->setLayout("admin");
		$this->layout->setTitle("Gestor de Noticias");
		$this->layout->js(Array(base_url()."js/views/admin/noticias.js"));	
		$this->layout->view("admin/noticias");
	}

	public function addAndEditNoticia() {
		if(isset($_FILES['inpImageAdd']) && $_FILES['inpImageAdd']['size'] > 0){
			$imagen = $_FILES['inpImageAdd']['tmp_name'];
			$splitName = explode(".", $_FILES['inpImageAdd']['name']);
			$fileExt = end($splitName);
		}

        $result = $this->admin->db_noticias_addAndEdit($_POST['inpId'], $_POST['inpTitulo'], $_POST['inpDescripcion'], $_POST['inpEstado'], $this->session->userdata('id'));
        if($result["resultado"] && isset($_FILES['inpImageAdd']) && $_FILES['inpImageAdd']['size'] > 0){
        	move_uploaded_file($imagen,'uploads/imagen_noticias/'.$result['id'].'.'.$fileExt);
	        // ADD IMAGEN
	        $this->admin->db_noticias_addImagen($result['id'], 'uploads/imagen_noticias/'.$result['id'].'.'.$fileExt);
        }
        echo json_encode($result);
    }

	public function getNoticias() {
        $data = $this->admin->db_get_noticias();
        echo json_encode((array) $data);
    }


	
}
