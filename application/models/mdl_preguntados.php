<?php
class Mdl_preguntados extends CI_Model{
    var $registro;
    var $opciones;    
    var $categoria;
    var $preguntas;

    function __construct(){
        parent::__construct();
        $this->registro = 'registro_preguntados';
        $this->categoria = 'categoria_preguntados';
        $this->opciones = 'opciones_preguntados';
        $this->usuarios = 'usuarios';
        $this->load->database('samsung');
    }
     
    
    function verificarUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return TRUE;
    	else
    		return FALSE;
    }
    
    function getRanking(){
    	$this->db->select('samsung_registro_preguntados.id_user,samsung_registro_preguntados.tiempo as tiempo,samsung_usuarios.ciudad,samsung_usuarios.completo,samsung_registro_preguntados.nivel as nivel,');
    	$this->db->from($this->registro);
    	$this->db->join('samsung_usuarios', 'samsung_usuarios.id = samsung_registro_preguntados.id_user');
    	$this->db->order_by("nivel", "desc");
    	$this->db->limit(10);
    	$query = $this->db->get();
    	return $query->result();
    }
       
    
    function verAmigos($id){
    	$this->db->select("fbid_amigo");
    	$this->db->from("preguntados_invitados");
    	$this->db->where("DATE_FORMAT(creado,'%d')","DATE_FORMAT(NOW(),'%d')",FALSE);
    	$this->db->where("fbid_user",$id);
    	$consulta=$this->db->get()->result();
    	return $consulta;
    }

    function existeFbid($fbid){
    	$this->db->where('fbid',$fbid);
    	$user=$this->db->get('usuarios');
    	if ($user->num_rows()>0)
    		return "1";
    	else
    		return "0";
    }
    
    
    function buscarUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return current($consulta->result());
    	else    		
    		return false;
    	}
    	
    function buscarUserFbid($id){
    		$this->db->select('*');
    		$this->db->from($this->registro);
    		$this->db->where('fbid', $id);
    		$consulta = $this->db->get();
    		if ($consulta->num_rows() > 0)
    			return current($consulta->result());
    		else
    			return false;
    	}	
        
    function getUser($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id', $id);
    	$consulta = $this->db->get();
    	if ($consulta->num_rows() > 0)
    		return current($consulta->result());
    }   
    
    function obtenerRegistro($id){
    	$this->db->select('*');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	return current($consulta->result());
    }
    
    // recupera cuantos ya a compartido el usuario
    function obtenerCampartidos($id)    {
    	$this->db->select('compartidos');
    	$this->db->from($this->registro);
    	$this->db->where('id_user', $id);
    	$consulta = $this->db->get();
    	return current($consulta->result());
    }  
        
    function getRespuesta($id){
    	$this->db->select('id,texto, padre, respuesta');
    	$this->db->from($this->opciones);
    	$this->db->where('padre', $id);
    	$consulta = $this->db->get();
    	return $consulta->result();
    }    
    
    function getPreguntas($nivel){
    	$query = $this->db->query("select * 
    							   from samsung_opciones_preguntados 
    			                   where tipo = 1 
    							   order by RAND() LIMIT 0,5;");
    	if ($query->num_rows() > 0)
    		return $query->result();
    }
    
    function getPregunta($categoria, $nivel){
    	$query = $this->db->query("select *
    							   from samsung_opciones_preguntados
    			                   where tipo = 1 and categoria = ".$categoria." and nivel=".$nivel."
    							   order by RAND() LIMIT 0,1;");
    	if ($query->num_rows() > 0)
    		return $query->result();    	
    }
    
}	





