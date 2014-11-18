<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	private $datos;
	private $datadb;
	public function __construct(){
		parent::__construct();
		
		$this->datos['media_url'] 	= base_url('resources');
		$this->datos['index'] 		= site_url('principal/index');
		$this->datos['registrar']	= site_url();

	}
	public function index()
	{
		$this->datos['lugar']='Inicio';		
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);
		$this->mensaje['op'] =
		"
			<h3>
				CRUD es el acrónimo de Crear, Obtener, Actualizar y Borrar (del original en inglés: Create, Read, Update and Delete). Se usa para referirse a las funciones básicas en bases de datos o la capa de persistencia en un software. El presente proyecto fue elaborado en dos lenguajes de programacion ; Java y Php . El mismo es sustentado por una serie de diagramas que describen su estructura y funciones. Los desarrolladores del presente proyecto se muestran a continuacion:  
			</h3>
			<div class = \"col-sm-4\">
			<dl>
  				<dt>Programador PHP</dt>
  				<dd>Jesus A Machado Ortiz </dd>
  				<dt>Casos de Uso </dt>
  				<dd>Iliannys Pereda </dd>
  				<dt>Programador JAVA</dt>
  				<dd>Ranyela Gómez </dd>
  				<dt>Diagrama de Secuencia</dt>
  				<dd>Miliaris Romero</dd>
  				<dt>Diagrama de Clase</dt>
  				<dd>Jesus A Machado O</dd>
  				<dt>Prototipos de Interfaz</dt>
  				<dd>Jesus A Machado O </dd>
  				<dd>Miliaris Romero</dd>
  				<dd>Ranyela Gómez</dd>
  				<dd>Iliannys Pereda </dd>
			</dl>
			</div>
			<div class = \"col-sm-4\">
			<dl>
  				<dt>Coordinador</dt>

  				<dd>Jesus A Machado Ortiz </dd>

  				<dt>Analistas</dt>
  				<dd>Carlos Ramos </dd>
  				<dd>José Gárcia </dd>
  				

  				<dt>Diseño</dt>
  				<dd>Rafael Gúzman </dd>
  				<dd>Miliaris Romero</dd>


  				<dt>Desarrollo</dt>

  				<dd>Ranyela Gómez</dd>
  				<dd>Iliannys Pereda </dd>

  				<dt>Prueba</dt>

  				<dd>Reinaldo</dd>
  				<dd>Carupano</dd>

  				
  			
  				
  				
  				
			</dl>
			</div>
		";
		$this->load->view('estado',$this->mensaje);
	}

	public function formulario()
	{		
		$this->datos['evento'] = 'registrar';
		$this->datos['opcion'] = 'si';
		$this->load->helper('form'); /* Importante */
		$this->datos['lugar']='Ingresar';
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);			
		$this->load->view('formulario',$this->datos);
	}

	public function listar(){ // Mostrar
		$this->datos['lugar']='Listar';	
		$this->datos['evento'] = 'buscar';
		$this->load->helper('form'); /* Importante */
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);	
		$this->load->view('formulario',$this->datos);
	}

	
	public function ingresar(){		 // Primer Proceso -> Crear
		$this->datos['lugar']='Registrar';	
		$this->load->model('principal_model');
		$this->principal_model->ingresar($_POST);
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);		
		$this->load->view('registrar.php');
	}
	public function mostrar(){
		$this->datos['lugar'] = 'Mostrar';
		$this->load->model('principal_model');
		$this->datos['result'] = $this->principal_model->mostrar($_POST);
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);		
		$this->load->view('mostrar',$this->datos);


	}
	public function modificar(){ // colocar una validación mas bonita.		
		$this->datos['lugar'] 	= 'Modificar';		
		$this->datos['evento'] = 'modificar';
		$this->load->helper('form'); /* Importante */
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);	
		$this->load->view('formulario',$this->datos);
		if (isset($_POST['cedula'])){			
			$this->load->model('principal_model');				
			$this->datos['ex'] = $this->principal_model->out_update($_POST,1);			
			$this->load->view('form_up',$this->datos);
		}			
	}	
	public function prin(){
		$this->datos['lugar'] 	= 'Modificar';
		$this->load->model('principal_model');	
		$this->principal_model->out_update($_POST,0); 
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);	
		$this->mensaje['op'] = "Su solicitud se realizó satisfactoriamente";
		$this->load->view('estado',$this->mensaje);
	}
	public function eliminar(){
		$this->datos['lugar']='Eliminar';	
		$this->datos['evento'] = 'eliminar';
		$this->load->helper('form'); /* Importante */
		$this->load->model('principal_model');            
		$this->load->view('cabecera',$this->datos);
		$this->load->view('menu',$this->datos);		
		$this->load->view('formulario',$this->datos);	

		if(isset($_POST['cedula'])){				
        	if($this->principal_model->eliminar($_POST)){
        		$this->datos['mensaje']= " Se ha eliminado al usuario: ".$_POST['cedula'];
        		$this->load->view('exito',$this->datos);
        	} 
        	else{
        		$this->datos['mensaje']= "No existe el usuario: ".$_POST['cedula'];
        		$this->load->view('error',$this->datos); 
        	} 	
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

