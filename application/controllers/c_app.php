<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class c_app extends CI_Controller {
	//CONSTRUCTOR
	function __construct(){
		parent::__construct();	
		$this->load->model('app');
		$this->load->model('utiles');	
		$this->load->helper(array('load_styles', 'load_scripts', 'load_assets', 'url'));		
		$this->load->library(array('form_validation', 'session', 'encrypt', 'Layout'));
	}
	
	public function index()	{
		$this->layout->setTitle("HENRY FORERO");
		$this->layout->js(Array(base_url()."js/views/app.js"));	
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("app", $data);
	}

	public function rutas()	{
		$this->layout->setTitle("NUESTRAS RUTAS");
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("rutas", $data);
	}

	public function servicios()	{
		$this->layout->setTitle("NUESTROS SERVICIOS");
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("servicios", $data);
	}

	public function reencauchadora()	{
		$this->layout->setTitle("REENCAUCHADORA");
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("reencauchadora", $data);
	}

	public function contactos()	{
		$this->layout->setTitle("CONTACTOS");
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("contactos", $data);
	}

	public function noticias()	{
		$this->layout->setTitle("NOTICIAS");
		$this->layout->js(Array(base_url()."js/views/noticias.js"));
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("noticias", $data);
	}

	public function noticia()	{
		$id = strip_tags($this->uri->segment('2'));
		if(!is_numeric($id)){
			$this->layout->view("404");
			return false;
		}
		$data = $this->app->db_get_noticia_by_id($id);
		if(count($data) == 0) {
			$this->layout->view("404");
			return false;
		}
		$data = $data[0];
		$this->layout->setTitle($data["titulo"]);
		$this->layout->js(Array(base_url()."js/views/noticia.js"));
		$data["loginBack"] = ($this->session->userdata('id') == "")?false:true; 		
		$this->layout->view("noticia", $data);
	}

	public function error404()	{
		$this->layout->setTitle("Opps!");
		$this->layout->view("404");
	}

	public function login()	{	
		$this->load->view("login");
	}

	public function setLogin(){		
		$data = $this->app->db_get_usuario($_POST["email"], $_POST["pass"]);
		if(count($data) == 0){
			echo json_encode(array("resultado" => false, "message" => "Verifique el correo electronico y contraseña"));
		}else{
			$row = $data[0];
			$datasession = array( 'id' => $row["id"],
								  'nombre' => $row["nombre"],
								  'nombre_corto' => $row["nombre_corto"],
								  'email' => $row["email"],
								  'admin' => $row["admin"]);
			$this->session->set_userdata($datasession);
			echo json_encode(array("resultado" => true, "data" => $datasession));	
		}	
	}

	public function setLogout(){
		$datasession = array(
				'id'  => null,			 
				'nombre' =>null,	
				'nombre_corto' => null,
				'email' => null,
				'admin' => null);	
		$this->session->unset_userdata($datasession);
		echo json_encode(array("resultado" => true, "message" => "Sesion cerrada satisfactoriamente"));			
	}	
	
	public function getLastNoticias() {
        $data = $this->app->db_get_last_noticias();
        echo json_encode((array) $data);
    }

	public function getRandomNoticias() {
        $data = $this->app->db_get_random_noticias();
        echo json_encode((array) $data);
    }

	public function getNoticias() {
        $data = $this->app->db_get_noticias();
        echo json_encode((array) $data);
    }

}
