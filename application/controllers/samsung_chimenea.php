<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Samsung_chimenea extends CI_Controller{	
	public $data;
	var $controlador;
	var $idApp;
	var $secretApp;
	var $condiciones;
	var $dispositivo;
		
	public function __construct(){
		parent::__construct();		
		$this->load->model('samsung_usuario','usuario_samsung');
		$this->load->model('mdl_preguntados','modelo');
		$this->load->helper('form');
		$this->folderView="chimenea";				
		$this->data['controlador']="samsung_chimenea";
		$this->data['idApp']="1665122247064113";
		$this->data['secretApp']="5687a6be17aa445a17dfcbdbfa3926e6";		
		$this->data['condiciones'] = "<a href='".base_url()."archivos/preguntados/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Escuela-Samsung.pdf' target='_blank' >T&eacute;rminos y Condiciones</a>";	
	}
	
	function index(){		
		$this->load->library('user_agent');
		$mobiles=array('Apple iPhone','Apple iPod Touch','Android','Apple iPad','LG');
		if ( $this->agent->is_mobile() )
			$this->movil();
		else{
			$this->data['dispositivo']="normal";
			$this->load->view($this->folderView.'/index', array( 'data' =>$this->data) );
		}
	}
		
	function movil(){
		$this->data['dispositivo']="movil";
		$this->load->view($this->folderView.'/movil', array( 'data' =>$this->data) );
	}
		
	function register(){
		$resp="0";
		if( isset( $_POST['nombre'] ) ){						
			if( $this->usuario_samsung->alreadyRegistrer( 'usuarios', array( 'fbid' => $_POST['fbid'] ) )=="y" ){
				$updateUser = array(
						'nombre' => $_POST['nombre'],'apellido' => $_POST['apellido'],
						'completo' => $_POST['nombre']." ".$_POST['apellido'],
						'mail' => $_POST['mail'],'ultima_app' => "galaxy-a",
						'ciudad' => $_POST['ciudad'],'cedula' => $_POST['cedula'],
						'telefono' => $_POST['telefono']
				);				
				$this->db->update( 'usuarios', $updateUser, array( 'fbid' => $_POST['fbid'] ));
				$participante=$this->usuario_samsung->getUserFbid($_POST['fbid']);
				$id = $participante->id;
				$this->db->insert("registro_preguntados",array(
								"id_user"=>$id,
								"fbid"=>$_POST['fbid']));				
				$resp="1";
			}
			else{
				$insertUser = array(
						'nombre' => $_POST['nombre'],'apellido' => $_POST['apellido'],
						'completo' => $_POST['nombre']." ".$_POST['apellido'],
						'mail' => $_POST['mail'],'ultima_app' => "galaxy-a",
						'ciudad' => $_POST['ciudad'],'cedula' => $_POST['cedula'],
						'telefono' => $_POST['telefono'],'fbid' => $_POST['fbid']
				);				
				$this->db->insert( 'usuarios', $insertUser );
				$id = $this->db->insert_id();
				$this->db->insert("registro_preguntados",array(
								"id_user"=>$id,															
								"fbid"=>$_POST['fbid']));				
				$resp="1";
			}
			echo $resp;
		}	
	}
	
	
	function verificarParticipante($id){
		$participante=$this->usuario_samsung->getUserFbid($id);		
		if($participante == "0"){
			echo "F";
		}else{
			//$participante=$this->usuario_samsung->getUserFbid($id);
			$registro=$this->modelo->buscarUser($participante->id);
			if ( $registro == FALSE )
				echo "F";
			else{
				$participante=$this->modelo->buscarUserFbid($id);
				$actividades=(int)$participante->actividad;
				$actividades=$actividades+1;
				$this->db->where("fbid",$id);
				$this->db->update("registro_preguntados",array("actividad"=>$actividades));
				echo "A";
			}
		}
	}
	
	function ingresoActividad($sw="0"){
		$data['user'] = json_decode($_POST['user']);
		$data['condiciones'] = "<a href='".base_url()."archivos/preguntados/REGLAMENTO DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Challenge-ON.pdf' target='_blank' >T&eacute;rminos y Condiciones</a>";
		$data["dispositivo"]=$sw;
		$data["usuario"]=$this->modelo->buscarUserFbid($data['user']);
		$this->load->view( $this->folderView.'/actividad', $data);
	}
		
	
	
	
	
			
	
	
	
	
	
	
	
	

}




























