<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class app extends CI_Model {
	private static $db;
	function __construct(){
		parent::__construct();	
		self::$db = &get_instance()->db;	
	}

	public function db_get_usuario($email, $pass) {
		$result = $this->db->query("SELECT
			`id`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `email`, `pass`, `admin`, `estado`,
			CONCAT(`p_nombre`,' ',`s_nombre`,' ',`p_apellido`,' ',`s_apellido`) AS `nombre`,
			CONCAT(`p_nombre`,' ',`p_apellido`) AS `nombre_corto` FROM `users` WHERE email=? AND pass=? AND estado=1", array($email, $pass));
		$a = $result->result_array();
        $result->free_result();
        return $a;
	}

	public function db_get_last_noticias() {
        $this->db->trans_start();
        $result = $this->db->query('SELECT a.*, IFNULL(a.url_image, "images/utils/default-image.jpg") image_url, 
            DATE_format(a.`fecha_creacion`, "%d/%m/%Y %h:%i %p") Fecha 
            FROM `noticias` a where estado=1 order by fecha_creacion desc limit 3');
        $a = $result->result_array();
        $result->free_result();
        if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "data" => $a);
        }
    }

    public function db_get_random_noticias() {
        $this->db->trans_start();
        $result = $this->db->query('SELECT a.*, IFNULL(a.url_image, "images/utils/default-image.jpg") image_url, 
            DATE_format(a.`fecha_creacion`, "%d/%m/%Y %h:%i %p") Fecha 
            FROM `noticias` a where estado=1 order by RAND() limit 3');
        $a = $result->result_array();
        $result->free_result();
        if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "data" => $a);
        }
    }

    public function db_get_noticias() {
        $this->db->trans_start();
        $result = $this->db->query('SELECT a.*, IFNULL(a.url_image, "images/utils/default-image.jpg") image_url, 
            DATE_format(a.`fecha_creacion`, "%d/%m/%Y %h:%i %p") Fecha 
            FROM `noticias` a where estado=1 order by fecha_creacion desc');
        $a = $result->result_array();
        $result->free_result();
        if ($this->db->_error_number()) {
            return array("resultado" => false, "message" => $this->db->_error_message());
        } else {
            $this->db->trans_complete();
            return array("resultado" => true, "data" => $a);
        }
    }

    public function db_get_noticia_by_id($id) {
        $this->db->trans_start();
        $result = $this->db->query('SELECT a.*, IFNULL(a.url_image, "images/utils/default-image.jpg") image_url, 
            DATE_format(a.`fecha_creacion`, "%d/%m/%Y %h:%i %p") Fecha, CONCAT(u.`p_nombre`," ", u.`p_apellido`) usuario
            FROM `noticias` a 
            JOIN users u ON a.`id_usuario`=u.`id` where a.estado=1 and a.id=?', array($id));
        $a = $result->result_array();
        $result->free_result();
        return $a;
    }


	
}