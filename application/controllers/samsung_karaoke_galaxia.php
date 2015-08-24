<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Samsung_karaoke_galaxia extends CI_Controller{
	
	public $data;
	var $folderView;
	var $controlador;
	var $idApp;
	var $secretApp;
	var $condiciones;
	var $dispositivo;
		
	public function __construct(){
		parent::__construct();		
		$this->load->model('samsung_usuario','usuario_samsung');
		$this->load->model('mdl_samsung_karaoke_galaxia','modelo');
		$this->load->helper('form');
		$this->folderView="samsung_karaoke_galaxia";
		$this->data['controlador']="samsung_karaoke_galaxia";
		$this->data['idApp']="1435753433388451";
		$this->data['secretApp']="93e182c582deafb8818fd2ade519ec15";		
		$this->data['condiciones'] = "<a href='".base_url()."archivos/REGLAMENTO-DE-TERMINOS-Y-CONDICIONES-PARA-EL-CONCURSO-Karaoke.pdf' target='_blank' >T�rminos y condiciones</a>";
	}
	
	function index(){
		$this->load->library('user_agent');
		$mobiles=array('Apple iPhone','Apple iPod Touch','Android','Apple iPad');
		if ( $this->agent->is_mobile() )
			$this->movil();
		else{
			$this->data['dispositivo']="normal";
			$this->load->view($this->folderView.'/index', array( 'data' =>$this->data) );			
		}
	}
	//listado Videos
	function listadojson(){

		$filtro = $this->uri->segment(3);

		$this->db->select('id, filename');
		$this->db->where('aprobado', '1');

		$this->db->from("karaoke_galaxia");
		$this->db->order_by("creado", "desc");
		//en caso que se defina filtro
		if ($filtro != false)
			$this->db->like('nombre',  $filtro);

		$consulta = $this->db->get();
		if ($consulta->num_rows() > 0){
			$data['videos'] =  $consulta->result() ;
			//$this->load->view($this->folderView.'/listadojson', $data );
			echo json_encode($data['videos']);
		}else
		return FALSE;

	}

//samsung_karaoke_galaxia/grabavideo
	function grabavideo (){
		$nombrevideo = $_POST['filename'];

		if (isset($nombrevideo )){
//			$nombrevideo ="prueba";
			$this->db->insert("karaoke_galaxia",array(
				"filename"=>$nombrevideo,
				"id_user"=>$_POST['filename'],
				"fbid"=>$_POST['fbid'],
				"nombre"=>$_POST['nombre']));
		}
	}

	function video(){
		$data['video'] = $this->uri->segment(3);
		$data['id'] = $this->uri->segment(4);
		$this->load->view($this->folderView.'/video' , $data);
	}

	function votar(){
		$id = $_POST['id'];
		$fbid= $_POST['fbid'];
		// 1 validar si el usuario ya voto
		$this->db->select('*');
		$this->db->where('id_video', $id);
		$this->db->where('fbid', $fbid);

		$this->db->from("karaoke_galaxia_votos");
		$consulta = $this->db->get();
		$resultado = $consulta->result();
		if ($consulta->num_rows() > 0){
			echo "Solo puede realizar un voto por video";
		} else {
			$this->db->where('id', $id);
			$this->db->set('votos', 'votos+1', FALSE);
			$this->db->update('karaoke_galaxia');
			$test = $this->db->last_query();

			//insertamos registro en votos

			$data = array(
				'fbid' => $fbid,
				'id_video' => $id
			);
			$this->db->insert('karaoke_galaxia_votos', $data);
			echo "Voto realizado con éxito";

		}
	}



	function cargaCrop($nombre){
		$data['imagen']=$nombre;
		$this->load->view($this->folderView.'/view-crop', $data );
	}

	
	function getUserList(){
		$data['registros']=$this->modelo->listarusuariosregistrados();
		$this->load->view($this->folderView.'/view-listado', $data );
	}
	
	function cargaGaleria(){
		 $data['galeria']=$this->modelo->listargaleriaregistrados($_POST["iduser"]);
		 $this->load->view($this->folderView.'/view-galeria-registros', $data );
		 
	}
	
	function imagenPieza(){
		$data['script']="";
		if(isset($_FILES['image'])){			
			$config['upload_path'] = './galaxy-a/uploads/';
			$config['allowed_types'] = 'jpeg|gif|jpg|png';
			$config['max_size']	= '20000';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);			
			if ( ! $this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());					
				$data['script']="<script>alert('Error... Al cargar imagen');parent.$('#carga').hide();</script> ";
			}else{
				$upload=$this->upload->data();				
				$nombre=$upload["file_name"];
				$data['script']="
				<script>					
					parent.$('#archivo1').val('".$nombre."');
					parent.$('.espera').hide();
					parent.llamarCrop();
				</script>";
			}
		}			
		$this->load->view($this->folderView.'/cargaimagen',$data);
	}
	
	function imagenMobile(){
		$data['script']="";
		if(isset($_FILES['image'])){
			$config['upload_path'] = './galaxy-a/uploads/';
			$config['allowed_types'] = 'jpeg|gif|jpg|png';
			$config['max_size']	= '20000';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				$data['script']="<script>alert('Error... Al cargar imagen');parent.$('#carga').hide();</script> ";
			}else{
				$upload=$this->upload->data();
				$nombre=$upload["file_name"];
				$data['script']="
				<script>
					parent.$('#archivo1').val('".$nombre."');
					parent.$('.espera').hide();
					parent.llamarCrop();
				</script>";
			}
		}
		$this->load->view($this->folderView.'/cargaimagenMobile',$data);
	}
	
	function movil(){
		$this->data['dispositivo']="movil";
		$this->load->view($this->folderView.'/movil', array( 'data' =>$this->data) );
	}
	
	function getVideo(){
		$participante= $_POST['participante'];
		$origen = "/var/www/vhosts/misiva.com.ec/subdominios/appss/galaxy-a/generados/";
		$destino = "/var/www/vhosts/misiva.com.ec/subdominios/appss/galaxy-a/videos/";
		$numero = rand(0,99999);
		exec("ffmpeg -r 1/5 -i ".$origen.$participante."%d.jpg -r 30 ".$destino.$participante."-".$numero."-".date("h-m").".mp4");
		echo $participante."-".$numero."-".date("h-m").".mp4";
    }  

    function getCountGaleria(){    	
		$registro=$this->modelo->buscarUserFbid( $_POST["participante"]);
	    $this->db->where('id_user', $registro->id_user);
		$this->db->from('galeria_galaxy');
		echo $this->db->count_all_results();
    }
	
	function verificarParticipante($id){
		$participante=$this->usuario_samsung->getUserFbid($id);		
		if($participante == "0"){
			echo "F";			
		}else{		
			$registro=$this->modelo->buscarUser($participante->id);		
			if ($registro==FALSE)
				echo "F";
			else
				echo "A";
		}
	}	
	
	function savePuntage(){
		if( isset($_POST['puntos']) ){
			$this->db->where("fbid",$_POST['participante']);
			$this->db->update("karaoke_galaxia_registro",array("puntaje"=>$_POST['puntos']));
					
			$this->db->select('edad');
			$this->db->where("fbid",$_POST['participante']);
			$this->db->from("karaoke_galaxia_registro");
    		$consulta = $this->db->get();	    	
	    	$registro =current($consulta->result());	    	
	    	echo $registro->edad;
	    	
		}
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
				$this->db->insert("karaoke_galaxia_registro",array(
															"id_user"=>$id, 
															"edad"=>$_POST['edad'],
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
				$this->db->insert("karaoke_galaxia_registro",array(
															"id_user"=>$id,
															"edad"=>$_POST['edad'],
															"fbid"=>$_POST['fbid']));				
				$resp="1";
			}
			echo $resp;
		}	
	}
	/**************************************************************/
	
	function ingresoActividad($sw="0"){
		$this->data["dispositivo"]=$sw;			
		$this->load->view( $this->folderView.'/actividad' );
	}
	
	function test1(){
		$data["hojas"]=array("impresora","tablet","impresora","pantalla","microondas","curved tv","lavadora","audifonos");
		$this->load->view( $this->folderView.'/test1', $data );
		
	}
	
	function test2(){
		$this->load->view( $this->folderView.'/test2');
	}
	
	function test3(){
	
		$this->load->view( $this->folderView.'/test3', $data );
	}
	
	function cargaEfectos(){
		$this->load->view( $this->folderView.'/efectos');
	}
	
	function saveGenerado(){		
		$participante=$_POST["participante"];
		$registro=$this->modelo->buscarUserFbid( $_POST["participante"]);
		exec("chmod 777 /var/www/vhosts/misiva.com.ec/subdominios/appss/galaxy-a/generados/".$_POST["imagenselfie"] );		
		$this->modelo->guardarGaleria($registro->id_user,$_POST["imagenselfie"]);
	}
	
	
	
	function ingresoManifiesto(){
		if(isset($_POST["texto"]) ){
			$registro=$this->modelo->buscarUserFbid($_POST["participante"]);			 
			$insertarMensaje = array( "mensaje" => $_POST["texto"],
									  "fbid" => $_POST["participante"],
									  "id_user" => $registro->id);
			$this->db->insert("manifiesto_galaxy",$insertarMensaje );
		}
	}
	
	function obtenerManifiesto(){
		$this->data["manifiesto"]=$this->modelo->getManifiesto();
		$this->load->view($this->folderView.'/js-manifiesto',array( 'data' => $this->data ));
	}
	
	function obtenergaleria($fbid){
		$registro=$this->modelo->buscarUserFbid($fbid);		
		$data["galeria"]=$this->modelo->getGaleria($registro->id_user);		
		$this->load->view($this->folderView.'/js-galeria',$data );
	}
			
	function sumarCompartida($id){
		$participante=$this->modelo->buscarUserFbid($id);
		$compartidos=(int)$participante->compartidos;		
		$compartidos=$compartidos+1;		
		$this->db->where("id",$participante->id);
		$this->db->update("karaoke_galaxia_registro",array("compartidos"=>$compartidos));
	}

	function sumarCompartidaPosteo($id){
		$participante=$this->modelo->buscarUserFbid($id);
		$compartidos=(int)$participante->posteos;
		$compartidos=$compartidos+1;
		$this->db->where("fbid",$id);
		$this->db->update("karaoke_galaxia_registro",array("posteos"=>$compartidos));
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
	
	function agradecimiento(){
		$this->load->view($this->folderView.'/agradecimiento');
	}
	


}




























