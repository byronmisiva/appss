<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Samsung_preguntados extends CI_Controller{	
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
		$this->folderView="preguntados";				
		$this->data['controlador']="samsung_preguntados";
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
						'mail' => $_POST['mail'],'ultima_app' => "preguntados",
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
						'mail' => $_POST['mail'],'ultima_app' => "preguntados",
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

	function viewRanking(){
		$data['registros']=$this->modelo->getRanking();
		$this->load->view($this->folderView.'/ranking',$data);
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
		
	
	function getOpcion(){
		$categoria = json_decode($_POST['data']);
		$nivel = json_decode($_POST['parte']);
		//$preguntas = $this->modelo->getPregunta($categoria, $nivel);
		//$data["preguntas"]=$this->modelo->getPreguntas();
		$dato["preguntas"]=$this->modelo->getPregunta($categoria, $nivel);
		$dato["respuestas"]=array();
		foreach ($dato["preguntas"] as $row){
			$auxiliar=$this->modelo->getRespuesta($row->id);
			foreach ($auxiliar as $row2){
				array_push($dato["respuestas"], $row2);	
			}
		}
		$this->load->view( $this->folderView.'/listado_preguntas', $dato);
	}
	
	function getOpcionMobile(){
		$categoria = json_decode($_POST['data']);
		$nivel = json_decode($_POST['parte']);
		$dato["preguntas"]=$this->modelo->getPregunta($categoria, $nivel);
		$dato["respuestas"]=array();
		foreach ($dato["preguntas"] as $row){
			$auxiliar=$this->modelo->getRespuesta($row->id);
			foreach ($auxiliar as $row2){
				array_push($dato["respuestas"], $row2);
			}
		}
		$this->load->view( $this->folderView.'/listado_preguntasmovil', $dato);
	}
			
	function sumarCompartida($id){
		$participante=$this->modelo->buscarUserFbid($id);
		$compartidos=(int)$participante->compartidos;		
		$compartidos=$compartidos+1;		
		$this->db->where("fbid",$id);
		$this->db->update("entradas_juanes",array("compartidos"=>$compartidos));
	}
	
	function saveUser(){
		$participante=$this->modelo->buscarUserFbid($_POST["participante"]);
		$valorTiempo = (int)$participante->tiempo;
		$valor=(int)$participante->nivel;
		$valor=$valor+1;
		
		if ($valor > 4)
			$valor = 4;
		$valorTiempo = $valorTiempo + ((int)$_POST["tiempo"]);  
		$this->db->where("fbid",$_POST["participante"]);
		$this->db->update("registro_preguntados",array("nivel"=>$valor, "tiempo" => $valorTiempo));
		echo $valor;
	}
	
	function negativoUser(){
		$participante=$this->modelo->buscarUserFbid($_POST["participante"]);
		$this->db->where("fbid",$_POST["participante"]);
		$this->db->update("registro_preguntados",array("nivel"=>"1"));
		echo "1";
		
	}
		
	function contadorAciertos(){
		$participante=$this->modelo->buscarUserFbid($_POST["participante"]);
		$valor=(int)$participante->aciertos;
		$valor=$valor+1;
		$this->db->where("fbid",$_POST["participante"]);
		$this->db->update("entradas_juanes",array("aciertos"=>$valor));
	}
	
	function contadorErrados(){
		$participante=$this->modelo->buscarUserFbid($_POST["participante"]);
		$valor=(int)$participante->errados;
		$valor=$valor+1;
		$this->db->where("fbid",$_POST["participante"]);
		$this->db->update("entradas_juanes",array("errados"=>$valor));	
	}
	
	function contadorActividades(){
		$participante=$this->modelo->buscarUserFbid($_POST["participante"]);
		$valor=(int)$participante->actividades;
		$valor=$valor+1;
		$this->db->where("fbid",$_POST["participante"]);
		$this->db->update("entradas_juanes",array("actividades"=>$valor));
	}
	
	function registrarInvitados($id){
		$arreglo = json_decode($_POST['data']);
		$total   = count($arreglo);
		$dato    = $this->modelo->obtenerCampartidos($id);
		$data['user']= $this->modelo->obtenerRegistro($id);
	
		$val_nuevo = $total + (int)$dato->compartido;
		$data_update = array(
				"compartido" => (string)$val_nuevo);
		$this->db->where(array('id_user' => $id));
		$this->db->update('halloween', $data_update);
		if ($val_nuevo%5==0 || $total > 5)
			echo "C-0";
		else
			echo "I-".($val_nuevo%5);
	}
	
	
	function verificarAmigo($id){
		$amigos=array();
		$datos=$this->modelo->verAmigos($id);
		foreach ($datos as $row)
			array_push($amigos, $row->fbid_amigo);
		echo json_encode($amigos);
	}
	
	function registrarAmigos($id){
		$arreglo=json_decode($_GET['data']);
		foreach($arreglo as $row){
			$this->db->insert("preguntados_invitados",array("fbid_user"=>$id,"fbid_amigo"=>$row));
		}
	
		$participante=$this->usuario_samsung->getUserFbid($id);
		$registro=$this->modelo->buscarUser($participante->id);
		$valor=(int)$registro->invitarfb;
		$valor=$valor+1;
		$this->db->where("id_user",$participante->id);
		$this->db->update("registro_preguntados",array("invitarfb"=>$valor));
	}
	
	function invitarTwitter($id){	
		$participante=$this->usuario_samsung->getUserFbid($id);
		$registro=$this->modelo->buscarUser($participante->id);
		$valor=(int)$registro->invitarfw;
		$valor=$valor+1;
		$this->db->where("id_user",$participante->id);
		$this->db->update("registro_preguntados",array("invitartw"=>$valor));
	}

}




























