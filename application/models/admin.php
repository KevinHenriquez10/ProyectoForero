<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Model {
	private static $db;
	function __construct(){
		parent::__construct();	
		self::$db = &get_instance()->db;	
	}

    public function db_noticias_addImagen($id, $url) {
    	$this->db->trans_start(); 

		$this->db->query('UPDATE `noticias` SET url_image=? WHERE id=?', array($url, $id));

		if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "message" => "Imagen guardada satisfactoriamente");
        }
	}

    public function db_noticias_addAndEdit($id, $titulo, $descripcion, $estado, $idUsuario) {
    	$this->db->trans_start(); 

        if($id == null){
            $this->db->query('INSERT INTO `noticias`(`titulo`, `descripcion`, `fecha_creacion`, `estado`, `id_usuario`) VALUES (?,LOWER(?),NOW(),?,?);', array($titulo, $descripcion, $estado, $idUsuario));
            $id = $this->db->insert_id();
        }else{
            $this->db->query('UPDATE `noticias` SET `titulo`=?, `descripcion`=?, `fecha_creacion`=NOW(), `estado`=?, `id_usuario`=? WHERE `id`=?', array($titulo, $descripcion, $estado, $idUsuario, $id));
        }

		if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "message" => "Noticia gestionada satisfactoriamente", "id" => $id);
        }
	}

    public function db_get_noticias() {
        $this->db->trans_start();
        $result = $this->db->query('SELECT a.*, IFNULL(a.url_image, "images/utils/default-image.jpg") image_url, 
            DATE_format(a.`fecha_creacion`, "%d/%m/%Y %h:%i %p") Fecha 
            FROM `noticias` a order by fecha_creacion desc');
        $a = $result->result_array();
        $result->free_result();
        if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "data" => $a);
        }
    }
	
}
