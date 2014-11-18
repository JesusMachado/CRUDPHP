<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
	
class Principal_model extends CI_MODEL
{
	private $table = 'items';

	function __construct()
	{
		parent::__construct();
	}

	function ingresar($post){	
		$datos = array(
			'cedula'	 	 => $post['cedula'],
			'nombre'	 	 => $post['nombre'],
			'apellido' 		 => $post['apellido'],
			'estadoc'  	 	 => $post['myselect'],
			'correo'		 => $post['correo'],
			'telefonoh' 	 => $post['telefonoh'],
			'telefonoc' 	 => $post['telefonoc'],
			'telefonof' 	 => $post['telefonoc'],
			'direccion' 	 => $post['direccion'],
			'nacionalidad' 	 => $post['nacionalidad'],
			'fechan'		 => $post['fechan']
			);
			$this->db->insert('cliente',$datos);
		
	}
	function mostrar($post){
		$consulta = $this->db->get_where('cliente',array( 'cedula' => $post['cedula']));
		return $consulta->result();		
	}
	
	function out_update($post, $op) {
		if($op){
	        $this->db->where('cedula', $post['cedula']);
	        $query = $this->db->get('cliente');
	        $fila = $query->row();
	        return $fila;
	    }
     	else{
     		$this->db->where('cedula', $post['cedula']);
			$this->db->update('cliente', $post); 
     	}
    }
   

	function eliminar($post){
			$consulta = $this->db->get_where('cliente',array( 'cedula' => $post['cedula']));
			if(count($consulta->row()) === 0){
				return 0;
			}
			else{
				$this->db->delete('cliente', array('cedula' => $post['cedula'])); 
				return 1;				
			}
			
				
				
				
	

	}
	
}	
?>